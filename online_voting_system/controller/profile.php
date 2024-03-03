<?php
session_start();
include("database.php");
// foreach ($_SESSION as $row => $values) {

//             print_r($row. '->' . $values .'<br>');

//     }
$user_type = $_SESSION['user_type'];

$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
$user_belong = $_SESSION['user_belong'];

$queryProfile = "SELECT * FROM `login_data` WHERE((`user_id` = '$user_id') or (`user_belong` = '$user_belong')) AND (`email` = '$email')";
$sql = mysqli_query($dbcon, $queryProfile);
$data = $sql->fetch_assoc();
print_r($data);
// die();
// SELECT * FROM `login_data` WHERE((`user_id` = 1) OR (`user_belong` = 20)) AND (`email` = 'prashant@gmail.com');