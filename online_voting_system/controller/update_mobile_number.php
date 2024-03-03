<?php
if (isset($_POST['update_mobile_number'])){

    $old_contact= $_POST["old_contact"];
    $old_email= $_POST["old_email"];
    $new_contact= $_POST["new_contact"];
    
    $old_email = str_replace(' ', '', $old_email);
    $new_contact = str_replace(' ', '', $new_contact);
    $old_contact = str_replace(' ', '', $old_contact);


    $query = "UPDATE `login_data` SET `contact_number` = '$new_contact' WHERE `email` = '$old_email' AND `contact_number` = '$old_contact'";
    $insert = mysqli_query($dbcon, $query);

// also update from other tables 

    if ($insert){
        $msg = "Update successfully";
         header("location:../user/static/update_mobile_number.php?=$msg");
    } else{
             
            $msg = " Failed to connect to MySQL: " . mysqli_error($dbcon);
        
          
         $msg = "Email didn't update mobile number" + $msg;
        header("location:../user/static/update_mobile_number.php?=$msg");
    }
}
?>