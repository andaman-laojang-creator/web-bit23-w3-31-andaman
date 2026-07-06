<?php

// Report all PHP errors
error_reporting(E_ALL);

// Force errors to be displayed on the screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 

//                        ที่อยู่ db  username pass  ชื่อ db
$con = mysqli_connect("127.0.0.1","root","","manrood_db");

// ทดสอบ con
// if (!$con) {
//     die("nooooooooooooooo");
// }
// echo "wowwwwwwwww <br>";








// $servernam = "localhost";
// $username = "root";
// $password = "";
// $dbname = "manrood_db";

// $conn = mysqli_connect($servernam)