<?php
if (isset($_POST['docrequired'])) {

    $org_id = $_SESSION["user_belong"];
    $doc_requer_for= $_POST["doc_requer_for"];
    $doc_name = $_POST["doc_name"];
    // print_r($_POST);
    // die();
       $query = "INSERT INTO `requer_doc`(`org_id`, `doc_requer_for`, `doc_name`) VALUES ('$org_id','$doc_requer_for','$doc_name')";
    $insert = mysqli_query($dbcon, $query);
    if ($insert){
        $msg = "Doc successfully inserted into database";
         
    } else{
             
            $msg = " Failed to connect to MySQL: " . mysqli_error($dbcon);
        
          
         $msg = "Something went wrong" + $msg;
        }
        header("location:../user/static/require_doc.php?=$msg");
}
?>