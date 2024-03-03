

<?php
session_start();
include("database.php");
if (isset($_POST['forgate_password'])) {
   

    $user_belong = $_POST["user_belong"];
    $user_id = $_POST["user_identity"];
    $otp = $_POST["otp"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $user_id = str_replace(' ', '', $user_id);

    if ($password == $confirm_password) {

        if (!empty($user_id && $otp && $password && $confirm_password && $user_belong)) {
            
            $query = " UPDATE `login_data` SET `password` = '$confirm_password' WHERE( `email` = '$user_id' OR `contact_number` = '$user_id' OR `user_id` = '$user_id') AND `user_belong`= $user_belong";
            // die($query);
            $insert = mysqli_query($dbcon, $query);
            if ($insert) {
                $msg = "Update successfully";
                // header("location:../user/static/change_password.php?=$msg");
            } else {

                $msg = " Failed to connect to MySQL: " . mysqli_error($dbcon);


                $msg = "Email didn't update mobile number" . $msg;
            }
            // }else{
            //     $msg = "Current pass didn't match";

            // }
        } else {

            $msg = "empty field";
        }
    } else {
        $msg = "confirm password and password didn't match ";
    }

    // also update from other tables 


    header("location:../user/static/password_forgot.php?=$msg");

}



?>


