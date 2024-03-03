<?php if (isset($_POST["application"])) {
    // print_r($_POST);
    // print_r($_POST);
    // die();
    // $_POST["active_org_id"] = 121212; #$_POST["active_org_id"];
    // $_POST["voter_id"] = 2312313; #$_POST["voter_id"];

    $active_org_id = $_POST["active_org_id"];
    $voter_id = $_POST["voter_id"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $mobile_number = $_POST["mobile_number"];
    $email = $_POST["email"];
    // $profile_photo = "profile_photo"; # $_POST["profile_photo"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $district = $_POST["district"];
    $tahsil = $_POST["tahsil"];
    $city = $_POST["city"];
    $pin_code = $_POST["pin_code"];
    $type_address_proof = $_POST["type_address_proof"];
    // $doc_address_proof = "doc_address_proof"; #$_POST["doc_address_proof"];
    $type_id_proof = $_POST["type_id_proof"];
    // $id_proof = "id_proof"; # $_POST["id_proof"];
    $literate_status = $_POST["literate_status"];



    $tmp_name_address_profile_photo = $_FILES['address_profile_photo']['tmp_name'];
    $name_address_profile_photo = $_FILES['address_profile_photo']['name'];
    $newName_address_profile_photo = time() . $name_address_profile_photo;
    $destination_address_profile_photo = '../user/static/img/' . $newName_address_profile_photo;
    move_uploaded_file($tmp_name_address_profile_photo, $destination_address_profile_photo);
    $profile_photo = $destination_address_profile_photo;
    // print_r($profile_photo);die();
    #################
    $tmp_name_doc_address_proof = $_FILES['doc_address_proof']['tmp_name'];
    // print_r($tmp_name_doc_address_proof);die();
    $name_doc_address_proof = $_FILES['doc_address_proof']['name'];
    $newName_doc_address_proof = time() . $name_doc_address_proof;
    $destination_doc_address_proof = '../user/static/img/' . $newName_doc_address_proof;
    move_uploaded_file($tmp_name_doc_address_proof, $destination_doc_address_proof);
    $doc_address_proof = $destination_doc_address_proof;
    // print_r($doc_address_proof);die();

    #################
    $tmp_name_id_proof = $_FILES['id_proof']['tmp_name'];
    $name_id_proof = $_FILES['id_proof']['name'];
    $newName_id_proof = time() . $name_id_proof;
    $destination_id_proof = '../user/static/img/' . $newName_id_proof;
    move_uploaded_file($tmp_name_id_proof, $destination_id_proof);
    $id_proof = $destination_id_proof;
    // print_r($id_proof);die();


    $email = $_POST["email"];
    ################check email id exist or not
    $query = "SELECT `id` FROM `org_participate_voter` WHERE `email` = '$email'";
    $insert = mysqli_query($dbcon, $query);
    // print_r($insert);die();


    if ($insert->num_rows > 0 || empty($active_org_id && $voter_id && $first_name && $middle_name && $last_name && $dob && $mobile_number && $email && $profile_photo && $gender && $country && $state && $district && $tahsil && $city && $pin_code && $type_address_proof && $doc_address_proof && $type_id_proof && $id_proof)) {
        $msg = "email already registered or somthing is empty";
        header("location:../user/voter/application.php?msg=".$msg);
        die();
    } else {


        if ($dbcon->connect_error) {
            die("Connection failed: " . $dbcon->connect_error);
        }

        // Assuming these variables are defined elsewhere in your code
        // For example, $active_org_id, $voter_id, $first_name, etc.

        // Your SQL query with placeholders
        if (empty($literate_status)) {
            $query = "INSERT INTO `org_participate_voter`(`active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`,
                 `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`) 
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Use prepared statement to prevent SQL injection
            $stmt = $dbcon->prepare($query);

            // Bind parameters
            $stmt->bind_param("iissssssssssssssssss", $active_org_id, $voter_id, $first_name, $middle_name, $last_name, $dob, $mobile_number, $email, $profile_photo, $gender, $country, $state, $district, $tahsil, $city, $pin_code, $type_address_proof, $doc_address_proof, $type_id_proof, $id_proof);
        } else {
            $query = "INSERT INTO `org_participate_voter`(`active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`,
            `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Use prepared statement to prevent SQL injection
            $stmt = $dbcon->prepare($query);

            // Bind parameters
            $stmt->bind_param("iisssssssssssssssssss", $active_org_id, $voter_id, $first_name, $middle_name, $last_name, $dob, $mobile_number, $email, $profile_photo, $gender, $country, $state, $district, $tahsil, $city, $pin_code, $type_address_proof, $doc_address_proof, $type_id_proof, $id_proof, $literate_status);
        }
        // Execute the query
        if ($stmt->execute()) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        $query = "UPDATE `org_participate` SET `Voter_application_status`= 'requested' WHERE `unic_id`= '$voter_id' AND `user_belong` = $active_org_id";
        $org_participate_voter = mysqli_query($dbcon, $query);
        // Close statement and connection
        $stmt->close();
        $dbcon->close();

        #create row and find row id for insert data/ update remaining form data

        // echo $id . "data insert";
        if ($insert) {
            header("location:../user/voter/application.php");
        }
    }
    #check email id exist or not###############


}
