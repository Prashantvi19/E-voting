<?php
// echo "Hello";
if (isset($_POST["send_contact"])) {
  // echo "Hello";
  $name = $_POST["user_name"];
  $email = $_POST["email"];
  $user_belong = (isset($_SESSION['user_belong']) ? $_SESSION['user_belong'] : 'public');
  $active_id = (isset($_SESSION['user_belong']) ? $_SESSION['unic_id'] : 'public');
  $subject = $_POST["subject"];
  $messages = $_POST["messages"]; #Address of text file in which write contact


  if (!empty($user_belong && $name && $email && $subject && $messages && $user_belong)) {

    if (isset($_SESSION['user_belong']) && isset($_SESSION['unic_id']) && ($_SESSION['user_id'] == 'Org Sub Super User' || $_SESSION['user_id'] == 'Org Super User') ) {

      $query = "INSERT INTO `contact`(`name`, `email`, `subject`, `messages`,`user_belong`,`active_id`) VALUES ('$name','$email','$subject','$messages','$user_belong','$active_id')";

    } else if (isset($_SESSION['user_belong']) && isset($_SESSION['unic_id']) && $_SESSION['user_id'] != 'Org Super User') {

      $query = "INSERT INTO `contact`(`name`, `email`, `subject`, `messages`,`user_belong`,`active_id`,`user_type`) VALUES ('$name','$email','$subject','$messages','$user_belong','$active_id',1)";


    } else if (!isset($_SESSION['user_belong']) && !isset($_SESSION['unic_id'])) {
      $query = "INSERT INTO `contact`(`name`, `email`, `subject`, `messages`,`user_belong`,`active_id`) VALUES ('$name','$email','$subject','$messages','$user_belong','$active_id')";
    }
    // echo  $query; die;}
    $insert = mysqli_query($dbcon, $query);
   

    // print_r($last_id); die;
    if ($insert) {
      $msg = "Successfully";
    } else {
      $msg = "Something went wrong";
    }
  } else {
    $msg = "Something empty";
  }

  header("location:../user/static/contact.php?=$msg");
}
