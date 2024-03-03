<?php
if (isset($_POST['login'])) {

    $user_belong = $_POST["user_belong"];
    $unic_id = $_POST["user_id"];
    $email = $_POST["user_id"];
    $contact_number = $_POST["user_id"];
    $password = $_POST["password"];
    

    $query = "SELECT * FROM `login_data` WHERE ((`email` = '$email') OR (`contact_number` = '$contact_number') OR (`unic_id` = '$unic_id')) AND ((`password` = '$password') AND (`user_belong` = '$user_belong'))";
    $user_verification = mysqli_query($dbcon, $query);

    if ($user_verification->num_rows > 0) {


        $data = $user_verification->fetch_assoc();
        if ($data['user_status'] == 1) {


            foreach ($data as $k => $value) {
                $_SESSION[$k] = $value;
                // print_r($k ."->".$value . '<br>');


            }
           

            if ($_SESSION['user_type'] == 0) {
                $_SESSION['user_type'] = 5;
                $table = 'ovs_admin';

                // SELECT `id`, `unic_id`, `name`, `email`, `mobile_number`, `password`, `deactivated_by_OVS`, `user_status`, `create_date`, `deactivated_date`, `created_by_id` FROM `ovs_admin` WHERE 1

                $query = "SELECT * FROM `$table` WHERE '$unic_id'";
            } elseif ($_SESSION['user_type'] == 1) {

                $table = 'org_participate';
                // SELECT `id`, `user_belong`, `unic_id`, `org_email_id`, `org_mobile_number`, `first_name`, `middle_name`, `last_name`, `email_by_voter`, `mobile_number_by_voter`, `Voter_application_status`, `password`, `created_at`, `updated_at` FROM `org_participate` WHERE 1;

                $query = "SELECT * FROM `$table` WHERE  ((`org_email_id` = '$email') OR (`org_mobile_number` = '$contact_number') OR (`email_by_voter` = '$email') OR (`mobile_number_by_voter` = '$contact_number') OR (`unic_id` = '$unic_id')) AND ((`password` = '$password') AND (`user_belong` = '$user_belong'))";

            } elseif ($_SESSION['user_type'] == 2) {
                $table = 'org_admin';
                //SELECT `id`, `ovs_accepted_by_id`, `org_name`, `email`, `mobile_number`, `password`, `unic_id`, `user_status` FROM `org_admin` WHERE 1
                $query = "SELECT * FROM `$table` WHERE '$unic_id'";

                $select = mysqli_query($dbcon, $query);
            } elseif ($_SESSION['user_type'] == 3) {
               

                $select = $user_verification;
            } else {

                $msg = "You are not part of any department";
            }

            // echo $table;
            // echo $user_belong;
            // die();
            if ($user_verification->num_rows == 1) {


                if ($select !== $user_verification) {
                    // $query = "SELECT * FROM `$table` WHERE '$unic_id'";
                    $select = mysqli_query($dbcon, $query);
                }

                foreach ($select as $row => $values) {
                    foreach ($values as $k => $value) {
                        $_SESSION[$k] = $value;
                        // print_r($value . '<br>');
                    }
                }
                
            }
            $msg = "Successfully";
            if ($_SESSION['user_type'] == 5 || $_SESSION['user_type'] == 2 || $_SESSION['user_type'] == 3) {
                header("location:../admin/ovs_admin/index.php?msg=$msg");
                die();
            }
        } else {
            $msg = "Request Pending";
        }
    } else {
        $msg = "You something went wrong";
    }
    header("location:../user/public/index.php?msg=$msg");
}
// `login_data`(`id`, `user_belong`, `user_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at`)
// SELECT * FROM `login_data` WHERE ((`email` = 'vish1@gmail.com') OR (`contact_number` = '1234332112') OR (`user_id` = 'prashant1212')) AND ((`password` = '12344321') AND (`user_belong` = 'prashant123'));
// SELECT * FROM `login_data` WHERE ((`email` = 'vh1@gmail.com') OR (`contact_number` = '12343112') OR (`user_id` = 'prashant1212')) AND ((`password` = '12344321') AND (`user_belong` = 'prashant123'));
// INSERT INTO `login_data`(`id`, `user_belong`, `user_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')