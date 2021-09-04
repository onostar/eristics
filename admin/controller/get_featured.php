<?php
    include "server.php";
 

    if(isset($_POST['featuredRestaurant']) && !empty($_POST['featuredRestaurant'])){
        $restaurant = $_POST['featuredRestaurant'];
        $select_item = $connectdb->prepare("SELECT title FROM stories WHERE category = ? ORDER BY title");
        // $select_item->bindvalue('restaurant_name', $restaurant);
        $select_item->execute([$restaurant]);
        while($row = $select_item->fetch()):
       

?>
        <option value="<?php echo $row->title?>"><?php echo $row->title?></option>

        <?php endwhile;?>
        <?php     
            }else{
                echo "<option>Select story</option>";
            }
        ?>