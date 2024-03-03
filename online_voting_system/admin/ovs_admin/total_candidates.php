<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<div class="container-fluid position-relative d-inline-block text-center " style="overflow:scroll; overflow:hidden; padding-right: 13rem !important; ">
    <h1 class="m-1">Total Candidates</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <?php
                //                     print_r($_GET);
                // die;

                include("../../controller/database.php");
                $user_belong = $_SESSION["user_belong"];
                $query_org = "SELECT `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `accepted_by_ID`, `created_at`, `updated_at` FROM `candidate` WHERE `accepted_by_ID` <> 'notAccept' AND `active_org_id` = $user_belong ";

                $insert = mysqli_query($dbcon, $query_org);
                // print_r($insert->fetch_assoc());
                $sn = 1;
                //    die;
                ?>
                <table class="table table-bordered table-striped">
                    <tdead>
                        <!-- SELECT `id`, `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `accepted_by_ID`, `created_at`, `updated_at` FROM `candidate` WHERE 1 -->
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Voter Active ID</th>
                            <th scope="col">Official Name</th>
                            <th scope="col">Famous Name</th>
                            <th scope="col">Publish Photo</th>
                            <th scope="col">Party Name</th>
                            <th scope="col">Post Name</th>
                            <th scope="col">Slogan Name</th>
                            <th scope="col">Doc Type Party Or ID Proof</th>
                            <th scope="col">Doc Party Or ID Proof</th>
                            <th scope="col">Motive Latter</th>
                            <th scope="col">Poster</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Speech Video</th>
                            <th scope="col">Appeal</th>
                            <th scope="col">Submit Date</th>
                            <th scope="col">Accepted by Admin</th>
                            <!-- <th scope="col">Accepted Date</th>
                            <th scope="col">Delete</th> -->
                        </tr>
                    </tdead>
                    <tbody>
                        <?php foreach ($insert as $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $sn++; ?></th>
                                <td><?php echo $row['active_id']; ?></td>
                                <td><?php echo $row['official_name']; ?></td>
                                <td><?php echo $row['famous_name']; ?></td>
                                <!-- <td><?php
                                            // echo $row['address_publish_photo']; 
                                            ?></td> -->
                                <td><a href="../<?php echo $row['address_publish_photo']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Publish Photo </a></td>
                                <td><?php echo $row['party']; ?></td>
                                <td><?php echo $row['post']; ?></td>
                                <td><?php echo $row['slogan']; ?></td>
                                <td><?php echo $row['doc_type_party_or_id_proof']; ?></td>
                                <!-- <td><?php
                                            //  echo $row['address_party_or_id_proof'];
                                            ?></td> -->
                                <td><a href="../<?php echo $row['address_party_or_id_proof']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Doc Party Or ID Proof </a></td>
                                <!-- <td><?php
                                            // echo $row['address_motive_latter']; 
                                            ?></td> -->
                                <td><a href="../<?php echo $row['address_motive_latter']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Motive Latter </a></td>
                                <!-- <td><?php
                                            //  echo $row['address_poster']; 
                                            ?></td> -->
                                <td><a href="../<?php echo $row['address_poster']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Poster </a></td>
                                <!-- <td><?php
                                            //  echo $row['address_logo']; 
                                            ?></td> -->
                                <td><a href="../<?php echo $row['address_logo']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Logo </a></td>
                                <!-- <td><?php
                                //  echo $row['address_speech_video']; 
                                ?></td> -->
                                <td><a href="../<?php echo $row['address_speech_video']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Speech Video </a></td>
                                <td><?php echo $row['address_appeal']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <?php if ($row['accepted_by_ID'] == 0) { ?><td> Pending Request</td>
                                <?php } else if ($row['accepted_by_ID'] != 0) { ?><td><?php echo $row['accepted_by_ID']; ?></td><?php } ?>
                                <!-- <td><?php 
                                // echo $row['updated_at']; 
                                ?></td> -->

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