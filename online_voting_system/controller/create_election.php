<?php
//  ############# create_election
if (isset($_POST["create_election"])) {
    $organization_name = $_POST["organization"];
    ###### email and mobile number in database
    if (!empty($_POST["mobile_number"] && $_POST["email"])) {
        $mobile_number = $_POST["mobile_number"];
        $email = $_POST["email"];

        
        $unic_id = substr($organization_name, -3).substr($mobile_number, -4);
        // print_r($organization_name.);
        // die($unic_id);

        $query1 = "SELECT *FROM `org_admin` WHERE `email`='$email'";
        $sql1 = mysqli_query($dbcon, $query1);
        $query2 = "SELECT *FROM `org_admin` WHERE `mobile_number`='$mobile_number' ";
        $sql2 = mysqli_query($dbcon, $query2);
        // echo $sql1->num_rows;
        // die();
        if (($sql1->num_rows > 0) && ($sql2->num_rows > 0)) {
            $msg = 'email or mobile number already exist';
            header("location:../user/public/create_election.php?msg=" . $msg);
            die();
        } elseif (($sql1->num_rows > 0)) {
            $msg = 'email already exist';
            header("location:../user/public/create_election.php?msg=" . $msg);
            die();
        } elseif ($sql2->num_rows > 0) {
            $msg = 'mobile number already exist';
            header("location:../user/public/create_election.php?msg=" . $msg);
            die();
        } else {
            $msg = 'email or mobile number new in data base';
        }
    }
    // ###### email and mobile number in database

    // ####### password match

    if (empty($_POST["password"] && $_POST["confirm_password"])) {
        $msg = "Please password create password";
        header("location:../user/public/create_election.php?msg=" . $msg);
        die();
    } elseif ($_POST["password"] == $_POST["confirm_password"]) {
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $msg = "The Confirm Password is match password";
    } else {
        $msg = "The Confirm Password is not match password";
        header("location:../user/public/create_election.php?msg=" . $msg);
        die();
    }
    // ####### password match


    if (!empty($organization_name && $mobile_number && $email && $confirm_password)) {

        $query = "INSERT INTO `org_admin`(`org_name`, `email`, `mobile_number`,`unic_id`, `password`) VALUES ('$organization_name','$email','$mobile_number','$unic_id','$confirm_password')";

        $insert = mysqli_query($dbcon, $query);

        $last_id = mysqli_insert_id($dbcon);

        $org_admin = 2;
        $user_id = 'Org Super User';

        $msg = ($insert) ? "Registration Successful" : "Something went wrong";

        // INSERT INTO `login_data`(`id`, `user_belong`, `user_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')

        $login_data_query = "INSERT INTO `login_data`(`user_belong`,`user_id`,`unic_id`, `email`, `contact_number`, `user_type`, `password`) VALUES ('$last_id','$user_id','$unic_id','$email','$mobile_number','$org_admin','$confirm_password')";

        $insert = mysqli_query($dbcon, $login_data_query);

        $last_id2 = mysqli_insert_id($dbcon);

        $msg2 = ($login_data_query) ? " but wait for accepting" : "Something went wrong in accepting";
        $msg = ($insert) ? "Registration Successful" . $msg2 : "Something went wrong" . $msg2;
    } else {
        $msg = "Empty field";
    }
    // echo $organization_name . $mobile_number .$email .$confirm_password;
    header("location:../user/public/create_election.php?msg=" . $msg);
    die();
}
// create_election #############
