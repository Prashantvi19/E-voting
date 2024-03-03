<?php
session_start();
include("database.php");
if (isset($_POST['change_password'])) {

    $email = $_SESSION["email"];
    // $email = $_SESSION["email"];
    $user_belong = $_SESSION["user_belong"];
    // die($email);
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($confirm_password == $new_password) {

        if (!empty($email && $current_password && $new_password && $confirm_password)) {
            // echo $ID,$current_password,$new_password,$confirm_password;

            $query = "SELECT * FROM `login_data` WHERE  `email` ='$email' AND `password` = '$current_password' AND `user_belong` = '$user_belong' ";
            // die($query);
            $select = mysqli_query($dbcon, $query);
            if ($select -> num_rows > 0) {
                $query = "UPDATE `login_data` SET `password` = '$confirm_password' WHERE `email` ='$email' AND `password` = '$current_password' AND `user_belong` = '$user_belong' ";
                // die($query);
                $insert = mysqli_query($dbcon, $query);

                if ($insert) {
                    $msg = "Update successfully";
                    // header("location:../user/static/change_password.php?=$msg");
                } else {

                    $msg = " Failed to connect to MySQL: " . mysqli_error($dbcon);


                    $msg = "Email didn't update mobile number" + $msg;
                }
            }else{
                $msg = "Current pass didn't match";

            }
        } else {

            $msg = "empty field";
        }
    } else {
        $msg = "confirm password and password didn't match ";
    }

    // also update from other tables 


    header("location:../user/static/change_password.php?=$msg");
}
