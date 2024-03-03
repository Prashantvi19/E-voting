<?php
if (isset($_POST["send_feedback"])){
       $name = $_POST["user_name"];
    $email = $_POST["email"];
    $active_id = $_SESSION['unic_id'];

    // $user_picture=$_POST["user_picture"];

    $rating = $_POST["user_rate"];
    $feedback = $_POST["user_feedback"]; #Address of text file in which write feedback
if(!empty($name && $email && $rating && $feedback && $active_id)){
    $query = "INSERT INTO `feedback`(`name`,`email`, `rating`, `address_feedback`,`active_id`) VALUES ('$name','$email','$rating','$feedback','$active_id')";
    $insert = mysqli_query($dbcon, $query);
    if($insert){
        $msg="Successfully";
    }    
}else{
    $msg="empty field";
}
header("location:../user/static/feedback.php?=$msg");
}
