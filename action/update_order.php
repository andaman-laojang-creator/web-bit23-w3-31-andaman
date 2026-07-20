<?php
// Report all PHP errors
error_reporting(E_ALL);

// Force errors to be displayed on the screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 

$name = $_POST["name"];
$pt = $_POST["payment"];
$ut = $_POST["usage_type"];
$img = $_POST["imge"];
$r_id = $_POST["room_id"];
$order_id = $_POST["orderd_id"];

include "connect.php";

$sql = "UPDATE `orders` 
        SET `name`='$name',`payment`='$pt',`usage_type`='$ut',`room_id`='$r_id',`imge`='$img' 
        WHERE order_id = '$order_id'";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "noooooooooo";
}else{
    header("location: ../manage_order.php");
    exit;
}