<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<div class="container-fluid position-relative d-inline-block text-center " style="overflow:scroll; overflow:hidden; padding-right: 13rem !important; ">
    <h1 class="m-1">Application form Remaining </h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <?php
                include("../../controller/database.php");
                $user_belong = $_SESSION["user_belong"];
                $query_org = "SELECT `unic_id`, `org_email_id`, `org_mobile_number`, `first_name`, `middle_name`, `last_name`, `email_by_voter`, `mobile_number_by_voter`, `Voter_application_status`, `created_at`,`password` FROM `org_participate` WHERE( `Voter_application_status` = 'notAccept' OR `Voter_application_status` = 'requested' OR `Voter_application_status` = 'noSingup') AND `user_belong` =$user_belong";
                $insert = mysqli_query($dbcon, $query_org);
                // print_r($insert->fetch_assoc());
                $sn = 1;
                //    die;
                ?>
                <table class="table table-bordered table-striped">
                    <tdead>
                        <!--SELECT `id`, `user_belong`, `unic_id`, `org_email_id`, `org_mobile_number`, `first_name`, `middle_name`, `last_name`, `email_by_voter`, `mobile_number_by_voter`, `Voter_application_status`, `password`, `created_at`, `updated_at` FROM `org_participate` WHERE 1 -->
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Active ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Admin Enter Voter Email</th>
                            <th scope="col">Admin Voter mobile Number</th>
                            <th scope="col">Voter Enter Email</th>
                            <th scope="col">Voter Enter mobile Number</th>
                            <th scope="col">Assing Password</th>
                            <th scope="col">Created User Date</th>
                            <th scope="col">Voter Application Status</th>
                        </tr>
                    </tdead>
                    <tbody>

                        <?php foreach ($insert as $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $sn++; ?></th>
                                <td><?php echo $row['unic_id']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['middle_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['org_email_id']; ?></td>
                                <td><?php echo $row['org_mobile_number']; ?></td>
                                <td><?php echo $row['email_by_voter']; ?></td>
                                <td><?php echo $row['mobile_number_by_voter']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <?php if ($row['Voter_application_status'] == 'notAccept') { ?><td>No</td>
                                <?php } else if ($row['Voter_application_status'] == 'requested') { ?><td>Request Pending</td>
                                <?php } else if ($row['Voter_application_status'] == 'noSingup') { ?><td>Didn't login/create password</td>
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