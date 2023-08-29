<?php
session_start();
include ("backend/random_orders.php");
include ("backend/storage_data.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="css/design.css" />
    <title>FrontDeskApp</title>
</head>
<body>
    <div id="avail_div">
        <span id="avail_small">Available Small Storage</span>
        <span id="avail_medium">Available Medium Storage</span>
        <span id="avail_large">Available Large Storage</span>
    </div>
    <div id="quantity_div">
        <span id="quantity_small">
            <?php
                $small_storage = new storage_data();
                $small_storage->get_small_storage_data();
            ?>
        </span>
        <span id="quantity_medium">
            <?php
                $medium_storage = new storage_data();
                $medium_storage->get_medium_storage_data();
            ?>
        </span>
        <span id="quantity_large">
            <?php
                $large_storage = new storage_data();
                $large_storage->get_large_storage_data();
            ?>
        </span>
    </div>

    <div id="pending_div">
        <span id="pending_caption">Pending Orders</span>
    </div>
    <table class="pending_table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Package Size</th>
            </tr>
        </thead>
        <tbody id="table_body">
            <?php
            for($i=0;$i<=10;$i++){
                $random_customer = new pending_customers();
    
                $random_customer->display_pending_customers();
            }
            ?>
        </tbody>
    </table>

    <div id="form_div">
    <form action="backend/submit_filter.php" method="POST">
        <div class="form-row">
            <span id="error">
                <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                } 
                ?>
            </span>
        </div>
        <div class="form-row">
            <span>First Name: </span>
            <input type="text" name="first_name" id="first_name" placeholder="Enter first name" required>
        </div>
        <div class="form-row">
            <span>Last Name: </span>
            <input type="text" name="last_name" id="last_name" placeholder="Enter last name" required>
        </div>
        <div class="form-row">
            <span>Phone Number: </span>
            <input type="text" name="phone_number" id="phone_number" placeholder="Enter a 9-digit phone number" pattern="\d{9}" required>
        </div>
        <div class="form-row">
            <span>Package Size: </span>
            <select name="package_size" id="package_size">
                <option value="Small box">Small box</option>
                <option value="Medium box">Medium box</option>
                <option value="Large box">Large box</option>
            </select>
        </div>
        <div id="submit_div">
            <input id="submit_btn" type="submit" value="STORE">
        </div>
    </form>
</div>

    <div id="str_div">
        <span id="str_caption">Boxes on storage</span>
    </div>

    <table id="str_table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Package Size</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="str_body">
            <?php
                $random_customer = new storage_data();
        
                $random_customer->display_boxes_on_storage();
            ?>
        </tbody>
    </table>

</body>
</html>