<?php

    include "server.php";
    session_start();

    if(isset($_SESSION['my_restaurant'])){
        $my_restaurant = $_SESSION['my_restaurant'];
    }
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];

    $select_date = $connectdb->prepare("SELECT users.first_name, users.last_name, users.email, users.address, users.city, orders.order_id, orders.customer_email, orders.item_name, orders.quantity, orders.item_price, orders.restaurant, orders.order_date, orders.delivery_date FROM users, orders WHERE orders.restaurant = :restaurant AND users.email = orders.customer_email AND orders.order_status = 1 AND orders.delivery_date BETWEEN '$from_date' AND '$to_date' ORDER BY orders.delivery_date DESC");

    $select_date->bindvalue('restaurant', $my_restaurant);
    $select_date->execute();

    
    
?>  
    <?php echo "<h3>Delivery Register from '" . date("M jS, Y", strtotime($from_date)) . "' to '" . date("M jS, Y", strtotime($to_date)) ."'</h3>;"?>
    <hr>

    <div class="search">
        <input type="search" id="searchDeliveries" placeholder="Enter keyword">
    </div>
    <table id="deliveriesTable">
                    
        <thead>
            <tr>
                <td>S/N</td>
                <td>Customer</td>
                <td>item</td>
                <td>Qty</td>
                <td>Amount</td>
                <td>Address</td>
                <td>Date</td>
            </tr>
        </thead>
    <?php
        $n = 1;
        if($select_date){
            $rows = $select_date->fetchAll();
            foreach($rows as $row):
    ?>
    <tbody>
        <tr>
            <td><?php echo $n?></td>
            <td><?php echo $row->first_name . " " . $row->last_name?></td>
            <td><?php echo $row->item_name?></td>
            <td><?php echo $row->quantity?></td>
            <td>₦ <?php echo $row->item_price?></td>
            <td><?php echo $row->address . "<br>" . $row->city;?></td>
            <td><?php echo date("M jS, Y", strtotime($row->delivery_date));?></td>
            
        </tr>
        
    </tbody>
            <?php $n++; endforeach;?>
            
    </table>
        
        
        <?php 
            $check_order = $select_date->rowCount();
            if(!$check_order){
            echo "<p style='font-weight:bold; color:chocolate; text-transform:capitalize; font-size:1.3rem; text-align:center; margin-top:10px;'>No record found!</p>";
            }
        if($select_date){
                $totalAmount = $connectdb->prepare("SELECT SUM(item_price) AS total_price FROM orders WHERE restaurant = :restaurant AND order_status = 1 AND delivery_date BETWEEN '$from_date' AND '$to_date'");
                $totalAmount->bindvalue('restaurant', $my_restaurant);
                $totalAmount->execute();

                $amounts = $totalAmount->fetchAll();
                foreach($amounts as $amount){
                    echo "<p style='color:green; font-size:1.3rem; text-align:right; text-decoration:underline; font-weight:bold; margin-top:30px;'>Total = ₦ ". number_format($amount->total_price, 2) . "</p>";
                }
            }
        }
        ?>