<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<div class="container-fluid position-relative d-inline-block text-center " style="overflow:scroll; overflow:hidden; padding-right: 13rem !important; ">
    <h1 class="m-1">Vote Remaining</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <?php
                include("../../controller/database.php");

                $user_belong = $_SESSION["user_belong"];

                $query_org = "SELECT `id`, `active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`, `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`, `accepted_by_ID`, `vote_status`, `create_at`, `updated_at` FROM `org_participate_voter` WHERE `vote_status` = 1 AND  `active_org_id`= $user_belong";
                $insert = mysqli_query($dbcon, $query_org);
                // print_r($insert->fetch_assoc());
                $sn = 1;
                //    die;
                ?>
                <table class="table table-bordered table-striped">
                    <tdead>
                        <!-- SELECT `id`, `active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`, `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`, `accepted_by_ID`, `vote_status`, `create_at`, `updated_at` FROM `org_participate_voter` WHERE `vote_status` = 0-->
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
                            <th scope="col">Literate Status</th>
                            <!-- <th scope="col">User Status</th> -->
                            <th scope="col">Vote Status</th>
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
                                <td><?php //echo $row['deactivated_date']; 
                                    ?>Profile</td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['country']; ?></td>
                                <td><?php echo $row['state']; ?></td>
                                <td><?php echo $row['district']; ?></td>
                                <td><?php echo $row['tahsil']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['pin_code']; ?></td>
                                <td><?php echo $row['literate_status']; ?></td>
                                <?php if ($row['vote_status'] == 0) { ?><td>No</td>
                                <?php } else if ($row['vote_status'] == 1) { ?><td>Voted</td>
                                <?php } else {  ?><td>Server Error Contact to OVS Admin</td><?php } ?>


                                <!-- <td><a href="../../controller/org_admin_request.php?&azyx&lop=<?php
                                                                                                    //  echo $row['unic_id']; 
                                                                                                    ?>" class="btn btn-sm btn-secondary">Accept</a></td>
                                    <td><a href="../../controller/org_admin_request.php?rxyz&lop=<?php
                                                                                                    // echo $row['unic_id'];
                                                                                                    ?>" class="btn btn-sm btn-secondary">Reject</a></td> -->

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