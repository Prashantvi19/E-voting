<?php
if (isset($_POST["register_participate"])) {

    $user_belong = $_SESSION["user_belong"];
    $org_email_id = $_POST["org_email_id"];
    $org_mobile_number = $_POST["org_mobile_number"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    // $user_status = $_POST["user_status"];
    // print_r($_POST);
    // die();
    // SELECT `id`, `user_belong`, `unic_id`, `org_email_id`, `org_mobile_number`, `first_name`, `middle_name`, `last_name`, `email_by_voter`, `mobile_number_by_voter`, `Voter_application_status`, `password`, `created_at`, `updated_at` FROM `org_participate` WHERE 1

    $query = "SELECT * FROM `org_participate` WHERE  `user_belong`= $user_belong AND (`org_mobile_number` = $org_mobile_number or `org_email_id`= '$org_email_id')";
    $insert = mysqli_query($dbcon, $query);
    
    if ($insert->num_rows <= 0) {
        
        if (!empty($password && $confirm_password && $org_email_id && $org_mobile_number)) {
            if ($password == $confirm_password) {
                // print_r($insert);
                // die();
                $query = "INSERT INTO `org_participate`( `user_belong`, `org_email_id`, `org_mobile_number`,`password`) VALUES ('$user_belong','$org_email_id',$org_mobile_number,'$password')";


                $insert = mysqli_query($dbcon, $query);
                if ($insert) {
                    $msg = "Successfully";
                } else {
                }
            } else {
                $msg = "conferm password did not match";
            }
        }
        $msg = "Empty fileald";
    } else {
        $msg = "Data Oalready exist";
    }
    header("location:../user/static/data_of_org_participate.php?=$msg");
}
//INSERT INTO `org_participate`(`id`, `user_belong`, `org_email_id`, `org_mobile_number`, `first_name`, `middle_name`, `last_name`, `email_by_voter`, `mobile_number_by_voter`, `password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')
// UPDATE `org_participate` SET `id`='[value-1]',`user_belong`='[value-2]',`org_email_id`='[value-3]',`org_mobile_number`='[value-4]',`first_name`='[value-5]',`middle_name`='[value-6]',`last_name`='[value-7]',`email_by_voter`='[value-8]',`mobile_number_by_voter`='[value-9]',`password`='[value-10]' WHERE 1