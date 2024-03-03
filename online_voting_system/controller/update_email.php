<?php
if (isset($_POST['update_email'])){

    $old_email= $_POST["old_email"];
    $contact_number= $_POST["contact_number"];
    $new_email= $_POST["new_email"];
    
    $old_email = str_replace(' ', '', $old_email);
    $contact_number = str_replace(' ', '', $contact_number);
    $new_email = str_replace(' ', '', $new_email);

    $query = "UPDATE `login_data` SET `email` = '$new_email' WHERE `email` = '$old_email' AND `contact_number` = '$contact_number'";
    $insert = mysqli_query($dbcon, $query);

// also update from other tables 

    if ($insert){
        $msg = "Update successfully forgotten";
         header("location:../user/static/update_email.php?=$msg");
    } else{
             
            $msg = " Failed to connect to MySQL: " . mysqli_error($dbcon);
        
          
         $msg = "Email didn't update email" + $msg;
        header("location:../user/static/update_email.php?=$msg");
    }
}
?>