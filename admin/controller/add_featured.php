<?php
    include "server.php";
    session_start();

    /* function validate($field){
        if(!isset($_POST[$field])){
            return false;
        }else{
            return htmlspecialchars(stripcslashes($_POST[$field]));
        }
    } */
    
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";
    /* if(isset($_POST['add_feat'])){ */
        $restaurant = ucwords(htmlspecialchars(stripslashes($_POST['featuredRestaurant'])));
        $featured = ucwords(htmlspecialchars(stripslashes($_POST['featuredItem'])));

        /* check max number of headline  */
            $check_max_headline = $connectdb->prepare("SELECT * FROM stories WHERE headline_id = 1");
            $check_max_headline->execute();
            if($check_max_headline->rowCount() == 4){
                echo "<p class='exist' style=' color:red; font-size:1.2rem; font-weight:bold; text-align:center;'>You have reached the maximum number of headlines. Delete to add new! <a href='admin.php' style='padding:4px; font-size:.9rem; background:var(--secondaryColor); color:var(--tertiaryColor);'>Ok</a></p>";
            }else{

            
        /* check user availability */
        $check_user = $connectdb->prepare("SELECT * FROM stories WHERE category = :category AND title = :title AND headline_id = 1");
        
        $check_user->bindvalue('category', $restaurant);
        $check_user->bindvalue('title', $featured);
        $check_user->execute();

        if($check_user->rowCount() > 0){
            echo "<p class='exist' style='text-decoration:underline; color:red; font-size:1.2rem; font-weight:bold; text-align:center;'><span>".$featured."</span> From " . $restaurant . " is already an Headline!</p>";
            /* $_SESSION['success'] = "$featured from $restaurant is already a featrued item!";
            header("Location: admin.php"); */

        }else{
            $add_featured = $connectdb->prepare("UPDATE stories SET headline_id = 1 WHERE  category = :category AND title = :title");
            $add_featured->bindvalue('category', $restaurant);
            $add_featured->bindvalue('title', $featured);
            $add_featured->execute();

            if($add_featured):
                /* echo "<p><span>".$featured."</span> from " . $restaurant . " added to featured items!</p>"; */
?>            
            <table id="featuredTable">
                <thead>
                    <tr>
                    <td>S/N</td>
                    <td>Category</td>
                    <td>title</td>
                    <td>Posted by</td>
                    <td>Post Date</td>
                    <td>Action</td>
                    </tr>
                </thead>

                    <?php
                        $n = 1;
                        $select_user = $connectdb->prepare("SELECT * FROM stories WHERE headline_id = 1 ORDER BY title");

                        $select_user->execute();
                        
                        $rows = $select_user->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"><?php echo $n?></td>
                            <td><?php echo $row->category?></td>
                            <td><?php echo $row->title?></td>
                            <td><?php echo $row->posted_by?></td>
                            <td><?php echo date("jS M, Y", strtotime($row->posted_by))?></td>
                            <td><button style="background:transparent; border:none; width:80%; margin:0 auto;" title="remove from featured" onclick="removeFeatured('<?php echo $row->story_id?>')"><i class="fas fa-trash" style="color:red; font-size:1.3rem; text-align:center;" ></i></button></td>
                        </tr>
                        
                    </tbody>
                    
                    <?php $n++; endforeach; endif; ?>
                 </table>
                 <?php } }?>                                                                             
  