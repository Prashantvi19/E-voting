<?php 
session_start();
session_destroy();
 $msg = "Successfully";
 header("location:../public/index.php?msg=$msg");
 ?>
