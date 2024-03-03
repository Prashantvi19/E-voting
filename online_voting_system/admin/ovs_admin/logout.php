<?php 
session_start();
session_destroy();
 $msg = "Successfully";
 header("location:../../user/public/index.php?msg=$msg");
 ?>