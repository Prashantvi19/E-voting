<?php
if (isset($_POST["signup_participate"])) {
    // Include your database connection here
    // $dbcon = mysqli_connect("localhost", "username", "password", "database_name");

    // Check if connection is successful
    if (!$dbcon) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_belong = mysqli_real_escape_string($dbcon, $_POST["user_belong"]);
    $org_email_id = mysqli_real_escape_string($dbcon, $_POST["org_email_id"]);
    $org_mobile_number = mysqli_real_escape_string($dbcon, $_POST["org_mobile_number"]);
    $first_name = mysqli_real_escape_string($dbcon, $_POST["first_name"]);
    $middle_name = !empty($_POST["middle_name"]) ? mysqli_real_escape_string($dbcon, $_POST["middle_name"]) : '';
    $last_name = mysqli_real_escape_string($dbcon, $_POST["last_name"]);
    $email_by_voter = mysqli_real_escape_string($dbcon, $_POST["email_by_voter"]);
    $mobile_number_by_voter = mysqli_real_escape_string($dbcon, $_POST["mobile_number_by_voter"]);
    $default_user_password = mysqli_real_escape_string($dbcon, $_POST["default_user_password"]);

    // Generate unique ID
    $unic_id = substr($first_name, -3) . $user_belong . substr($first_name, -4);

    // Prepare and execute user verification query
    $user_verification_query = "SELECT * FROM `org_participate` WHERE (`org_email_id` = '$org_email_id' OR `org_mobile_number` = '$org_mobile_number') AND `password` = '$default_user_password' AND `user_belong` = '$user_belong'";
    $user_verification = mysqli_query($dbcon, $user_verification_query);

    if ($user_verification && mysqli_num_rows($user_verification) > 0) {
        $data = mysqli_fetch_assoc($user_verification);
        $user_id = $data['id'];

        // Check if passwords match and update data
        if (!empty($_POST["password"]) && $_POST["password"] == $_POST["confirm_password"]) {
            $password = $_POST["password"];

            $update_data_query = "UPDATE `org_participate` SET `unic_id`='$unic_id', `first_name`='$first_name', `middle_name`='$middle_name', `last_name`='$last_name', `email_by_voter`='$email_by_voter', `mobile_number_by_voter`='$mobile_number_by_voter', `password`='$password',`Voter_application_status` = 'notAccept' WHERE `id` = '$user_id' AND `user_belong` = '$user_belong'";

            $update_data = mysqli_query($dbcon, $update_data_query);

            if ($update_data) {
                $login_insert_query = "INSERT INTO `login_data`(`user_belong`, `user_id`, `unic_id`, `email`, `contact_number`, `password`,`user_status`) VALUES ('$user_belong', '$user_id', '$unic_id', '$email_by_voter', '$mobile_number_by_voter', '$password',1)";
                $login_insert = mysqli_query($dbcon, $login_insert_query);

                if (!$login_insert) {
                    $msg = "Error inserting login data";
                } else {
                    $msg = "Successfully updated data";
                }
            } else {
                $msg = "Error updating data";
            }
        } else {
            $msg = "Passwords do not match or empty";
        }
    } else {
        $msg = "User verification failed";
    }

    // $_SESSION['msg'] = $msg;
    header("location:../user/public/signup.php?msg=$msg");
    exit();
}

// Close database connection
mysqli_close($dbcon);
?>

