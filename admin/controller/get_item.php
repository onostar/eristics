<?php
    include "server.php";
 

    if(isset($_POST['restaurantToDelete']) && !empty($_POST['restaurantToDelete'])){
        $restaurant = $_POST['restaurantToDelete'];
        $select_item = $connectdb->prepare("SELECT title FROM stories WHERE category = ? ORDER BY category");
        // $select_item->bindvalue('restaurant_name', $restaurant);
        $select_item->execute([$restaurant]);
        while($row = $select_item->fetch()):
       

?>
        <option value="<?php echo $row->title?>"><?php echo $row->title?></option>

        <?php endwhile;?>
        <?php     
            }else{
                echo "<option>Select item</option>";
            }
        ?>