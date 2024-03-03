<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<div class="container-fluid position-relative d-inline-block text-center " style="overflow:scroll; overflow:hidden; padding-right: 13rem !important;">
    <h1 class="m-1">Voter Request</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <?php


                include("../../controller/database.php");
                $user_belong = $_SESSION["user_belong"];
                $query_org = "SELECT  `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`, `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`,`create_at` FROM `org_participate_voter` WHERE `accepted_by_ID` = 'notAccept' AND `active_org_id` = $user_belong ";

                $insert = mysqli_query($dbcon, $query_org);
                // print_r($insert->fetch_assoc());
                $sn = 1;
                //    die;
                ?>
                <table class="table table-bordered table-striped">

                    <tdead>
                        <!--SELECT `id`, `active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`, `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`, `accepted_by_ID`, `vote_status`, `create_at`, `updated_at` FROM `org_participate_voter` WHERE 1 -->
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Active ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Email</th>
                            <th scope="col">mobile Number</th>
                            <th scope="col">Profile Photo</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                            <th scope="col">District</th>
                            <th scope="col">Tehsil</th>
                            <th scope="col">City</th>
                            <th scope="col">Pin Code</th>
                            <th scope="col">Type Address Proof</th>
                            <th scope="col">Doc Address Proof</th>
                            <th scope="col">Type Id Proof</th>
                            <th scope="col">Id Proof</th>
                            <th scope="col">Literate Status</th>

                            <th scope="col">Submit Date</th>
                            <th scope="col">Accept</th>
                            <th scope="col">Delete</th>
                        </tr>

                    </tdead>
                    <tbody>

                        <?php foreach ($insert as $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $sn++; ?></th>
                                <td><?php echo $row['voter_id']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['middle_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile_number']; ?></td>

                                <td><a href="../<?php echo $row['profile_photo']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Profile Photo </a></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['country']; ?></td>
                                <td><?php echo $row['state']; ?></td>
                                <td><?php echo $row['district']; ?></td>
                                <td><?php echo $row['tahsil']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['pin_code']; ?></td>
                                <td><?php echo $row['type_address_proof']; ?></td>

                                <td><a href="../<?php echo $row['doc_address_proof']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Doc Address Proof</a></td>
                                <td><?php echo $row['type_id_proof']; ?></td>

                                <td><a href="../<?php echo $row['id_proof']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Id Proof</a></td>
                                <td><?php echo $row['literate_status']; ?></td>
                                <td><?php echo $row['create_at']; ?></td>

                                <td><a href="../../controller/voter_apli_reject_accept.php?&varazyx&apop=<?php echo $row['voter_id']; ?>" class="btn btn-sm btn-secondary">Accept</a></td>
                                <td><a href="../../controller/voter_apli_reject_accept.php?varrxyz&apop=<?php echo $row['voter_id']; ?>" class="btn btn-sm btn-secondary">Reject</a></td>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->
<?php include("../navbar_footer/footer.php"); ?>