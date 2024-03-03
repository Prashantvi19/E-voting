<?php
if (isset($_POST["login_data"])) {

    $user_belong = $_POST["user_belong"];
    $user_id = $_POST["user_id"];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];
    $user_type = $_POST["user_type"];
    $password = $_POST["password"];
    $user_status = $_POST["user_status"];

    $query = "INSERT INTO `login_data`(`user_belong`, `user_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`) VALUES ('$user_belong','$user_id','$email','$contact_number','$user_type','$password','$user_status')";
    $insert = mysqli_query($dbcon, $query);
    if ($insert) {
        $msg = "Successfully";
        header("location:../user/static/datasetAdminVoterOrg.php?=$msg");
    }
}
// `login_data`(`id`, `user_belong`, `user_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at`)