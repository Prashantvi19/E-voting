<?php
session_start();
include("./database.php");
if (isset($_POST["submit_subadmin"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirme_password = $_POST["confirme_password"];
    $user_id = "Org Sub Super User";
    $user_belong = $_SESSION["user_belong"];
    $user_belong = $_SESSION["user_belong"];
    $unic_id = $_SESSION["unic_id"];

    // INSERT INTO `login_data`(`id`, `user_belong`, `user_id`, `unic_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')
    // creat unic key
    $unic_id = $unic_id . $user_belong . substr($email, 0, 4);

    // print_r($_SESSION);
    // die($unic_id);
    // check email is exist or not
    $user_verification_query = "SELECT * FROM `login_data` WHERE `email` = '$email'";
    $user_verification = mysqli_query($dbcon, $user_verification_query);


    if ($user_verification->num_rows > 0) {
        $msg = "Email Id already exist";
    } else {
        if (!empty($password) && !empty($confirme_password)) {
            if ($password == $confirme_password) {


                $login_insert = "INSERT INTO `login_data`(`user_belong`,`user_id`, `unic_id`, `email`, `user_type`, `password`,`user_status` ) VALUES ('$user_belong','$user_id ','$unic_id ','$email',3,'$confirme_password',1)";
// print_r($login_insert);
//     die();
                $insert = mysqli_query($dbcon, $login_insert);

                $msg = ($insert) ? "Successfully" : "something went wrong ";
            } else {
                $msg = "confirm password did not match";
            }
        } else {
            $msg = "empty password ";
        }
    }
    header("location:../admin/ovs_admin/create_subadmin.php?msg=$msg");
}
