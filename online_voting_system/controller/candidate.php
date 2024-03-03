<?php
if (isset($_POST["candidate_form"])) {

    $tmp_name_address_publish_photo = $_FILES['address_publish_photo']['tmp_name'];
    $name_address_publish_photo = $_FILES['address_publish_photo']['name'];
    $newName_address_publish_photo = time() . $name_address_publish_photo;
    $destination_address_publish_photo = '../user/static/img/' . $newName_address_publish_photo;
    move_uploaded_file($tmp_name_address_publish_photo, $destination_address_publish_photo);
    // $_POST["address_publish_photo"] = $destination_address_publish_photo;


    $tmp_name_address_party_or_id_proof = $_FILES['address_party_or_id_proof']['tmp_name'];
    $name_address_party_or_id_proof = $_FILES['address_party_or_id_proof']['name'];
    $newName_address_party_or_id_proof = time() . $name_address_party_or_id_proof;
    $destination_address_party_or_id_proof = '../user/static/img/' . $newName_address_party_or_id_proof;
    move_uploaded_file($tmp_name_address_party_or_id_proof, $destination_address_party_or_id_proof);
    // $_POST["address_party_or_id_proof"] = $destination_address_party_or_id_proof;

    $tmp_name_address_motive_latter = $_FILES['address_motive_latter']['tmp_name'];
    $name_address_motive_latter = $_FILES['address_motive_latter']['name'];
    $newName_address_motive_latter = time() . $name_address_motive_latter;
    $destination_address_motive_latter = '../user/static/img/' . $newName_address_motive_latter;
    move_uploaded_file($tmp_name_address_motive_latter, $destination_address_motive_latter);
    // $_POST["address_motive_latter"] = $destination_address_motive_latter;

    $tmp_name_address_poster = $_FILES['address_poster']['tmp_name'];
    $name_address_poster = $_FILES['address_poster']['name'];
    $newName_address_poster = time() . $name_address_poster;
    $destination_address_poster = '../user/static/img/' . $newName_address_poster;
    move_uploaded_file($tmp_name_address_poster, $destination_address_poster);
    // $_POST["address_poster"] = $destination_address_poster;

    $tmp_name_address_logo = $_FILES['address_logo']['tmp_name'];
    $name_address_logo = $_FILES['address_logo']['name'];
    $newName_address_logo = time() . $name_address_logo;
    $destination_address_logo = '../user/static/img/' . $newName_address_logo;
    move_uploaded_file($tmp_name_address_logo, $destination_address_logo);
    // $_POST["address_logo"] = $destination_address_logo;

    $tmp_name_address_speech_video = $_FILES['address_speech_video']['tmp_name'];
    $name_address_speech_video = $_FILES['address_speech_video']['name'];
    $newName_address_speech_video = time() . $name_address_speech_video;
    $destination_address_speech_video = '../user/static/img/' . $newName_address_speech_video;
    move_uploaded_file($tmp_name_address_speech_video, $destination_address_speech_video);
    // $_POST["address_speech_video"] = $destination_address_speech_video;
    // 0-OVS Admin, 1-Org User, 2-Org Admin, 3-org Sub-Admin


    $active_org_id = $_SESSION['user_belong'];
    $active_id =  $_SESSION['user_id'];
    $official_name = $_POST["official_name"];
    $famous_name = $_POST["famous_name"];
    $address_publish_photo = $destination_address_publish_photo;
    $party = $_POST["party"];
    $post = $_POST["post"];
    $slogan = $_POST["slogan"];
    $doc_type_party_or_id_proof = $_POST["doc_type_party_or_id_proof"];
    $address_party_or_id_proof = $destination_address_party_or_id_proof;
    $address_motive_latter = $destination_address_motive_latter;
    $address_poster = $destination_address_poster;
    $address_logo = $destination_address_logo;
    $address_speech_video = $destination_address_speech_video;
    $address_appeal = $_POST["address_appeal"];
    ################check email id exist or not
    if ($_SESSION['user_type'] == 0) {
        $query = "SELECT `id`FROM `ovs_admin` WHERE `id` = '$active_id'";
        $insert = mysqli_query($dbcon, $query);
    } elseif ($_SESSION['user_type'] == 1) {
        $query = "SELECT `id`FROM `candidate` WHERE `active_org_id` = '$active_org_id' AND `active_id` = '$active_id'";
        $insert = mysqli_query($dbcon, $query);
    } elseif ($_SESSION['user_type'] == 2) {
        $query = "SELECT `id`FROM `org_admin` WHERE `active_id` = '$active_id'";
        $insert = mysqli_query($dbcon, $query);
    } else {
        $msg = "Are You not Candidate any Organization..Thanks!";
        header("location:../user/voter/candidate_form.php?=$msg ");
        die();
    }
    if ($insert->num_rows > 0 || empty($active_id && $active_org_id && $official_name && $famous_name && $address_publish_photo && $party && $post && $slogan && $doc_type_party_or_id_proof && $address_party_or_id_proof && $address_motive_latter && $address_poster && $address_logo && $address_speech_video && $address_appeal)) {
        $msg = "You are already registered";
        header("location:../user/voter/candidate_form.php?=$msg ");
        die();
    } else {
        #############create row and find row id for insert data/ update remaining form data
        $query = "INSERT INTO `candidate`( `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        // Use prepared statement to prevent SQL injection
        $stmt = $dbcon->prepare($query);

        // Bind parameters(sssssssssssssss=value Variable)
        $stmt->bind_param("iisssssssssssss", $active_id, $active_org_id, $official_name, $famous_name, $address_publish_photo, $party, $post, $slogan, $doc_type_party_or_id_proof, $address_party_or_id_proof, $address_motive_latter, $address_poster, $address_logo, $address_speech_video, $address_appeal);

        if (!$stmt) {
            die("Preparation failed: " . $dbcon->error);
        }


        // Execute the query
        if ($stmt->execute()) {
            $msg = "Record inserted successfully";
        } else {
            $msg = "uploading error" . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $dbcon->close();
        header("location:../user/voter/candidate_form.php?=$msg");
    }
}
