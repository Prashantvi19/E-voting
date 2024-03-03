<?php
session_start();
include("./database.php");
if (isset($_POST["ovs_admin_ad"])) {
    $created_by_id = $_SESSION["unic_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $unic_id = substr($name, -3) . substr($created_by_id, 2, -2) . substr($mobile_number, -4);

    // $user_status = $_POST["user_status"];

    // SELECT `id`, `unic_id`, `name`, `email`, `mobile_number`, `password`, `deactivated_by_OVS`, `user_status`, `create_date`, `deactivated_date`, `created_by_id` FROM `ovs_admin` WHERE 1

    $query = "SELECT * FROM `ovs_admin` WHERE `email` = '$email' or `mobile_number`= '$mobile_number' ";
    $insert = mysqli_query($dbcon, $query);

    if ($insert->num_rows <= 0) {

        if (!empty($password && $confirm_password && $email && $email)) {
            if ($password == $confirm_password) {
                // print_r($insert);
                // die();
                $query = "INSERT INTO `ovs_admin`(`unic_id`,`name`, `created_by_id`, `email`, `mobile_number`,`password`) VALUES ('$unic_id','$name','$created_by_id','$email','$mobile_number','$password')";

                $insert = mysqli_query($dbcon, $query);
                $user_belong = mysqli_insert_id($dbcon);//last entered id
                if ($insert) {
                    $msg = "Successfully";
                } else {
                    $msg = "UnSuccessfully";
                    die;
                }
                if ($insert) {
                    // // INSERT INTO `login_data`(`id`, `user_belong`, `user_id`, `unic_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')
                   
                        $user_id = "Super User";
                        $login_insert_query = "INSERT INTO `login_data`(`user_belong`, `user_id`, `unic_id`, `email`, `contact_number`,`user_type`, `password`, `user_status`) VALUES ('$user_belong', '$user_id', '$unic_id', '$email', '$mobile_number',0, '$password',1)";
                        $login_insert = mysqli_query($dbcon, $login_insert_query);
                   

                    if (!$login_insert) {
                        $msg = "Error inserting login data";
                    } else {
                        $msg = "Successfully";
                    }
                } else {
                    $msg = "Error updating data";
                }
            } else {
                $msg = "conferm password did not match";
            }
        }
        $msg = "Empty fileald";
    } else {
        $msg = "Data already exist";
    }
    header("location:../user/static/ovs_admin_ad.php?=$msg");
}
//    SELECT `id`, `unic_id`, `name`, `email`, `mobile_number`, `password`, `deactivated_by_OVS`, `user_status`, `create_date`, `deactivated_date`, `created_by_id` FROM `ovs_admin` WHERE 1



//     INSERT INTO `org_participate`(`id`, `user_belong`, `org_email_id`, `org_mobile_number`, `first_name`, `middle_name`, `last_name`, `email_by_voter`, `mobile_number_by_voter`, `password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')
//    UPDATE `org_participate` SET `id`='[value-1]',`user_belong`='[value-2]',`org_email_id`='[value-3]',`org_mobile_number`='[value-4]',`first_name`='[value-5]',`middle_name`='[value-6]',`last_name`='[value-7]',`email_by_voter`='[value-8]',`mobile_number_by_voter`='[value-9]',`password`='[value-10]' WHERE 1
