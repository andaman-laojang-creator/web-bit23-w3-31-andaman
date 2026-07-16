<?php

$name = $_POST["name"];
$pt = $_POST["payment"];
$ut = $_POST["usage_type"];
$img = $_POST["imge"];
$r_id = $_POST["room_id"];

include "connect.php";

$sql = "INSERT INTO `orders`
        (`name`, `payment`, `usage_type`, `room_id`, `imge`) 
        VALUES 
        ('$name','$pt','$ut','$r_id','$img')";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "noooooooooo";
}else{
    header("location: ../index.php");
    exit;
}