<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<div class="container-fluid position-relative d-inline-block text-center " style="overflow:scroll; overflow:hidden; padding-right: 13rem !important; ">
    <h1 class="m-1">Candidates Request</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <div class="bg-light rounded h-100 table-responsive">
                    <?php


                    include("../../controller/database.php");
                    $user_belong = $_SESSION["user_belong"];
                    $query_org = "SELECT `active_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `created_at`, `updated_at` FROM `candidate` where `accepted_by_ID` = 'notAccept' AND `active_org_id` =$user_belong";

                    $insert = mysqli_query($dbcon, $query_org);
                    // print_r($insert->fetch_assoc());
                    $sn = 1;

                    ?>
                    <table class="table table-bordered table-striped">
                        <tdead>
                            <!-- INSERT INTO `candidate`(`id`, `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `accepted_by_ID`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]')   -->
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
                                <th scope="col">Accept</th>
                                <th scope="col">Delete</th>
                            </tr>


                        </tdead>
                        <tbody>
                            <?php foreach ($insert as $row) { ?>
                                <tr>
                                    <th scope="row"><?php echo $sn++; ?></th>
                                    <td><?php echo $row['active_id']; ?></td>
                                    <td><?php echo $row['official_name']; ?></td>
                                    <td><?php echo $row['famous_name']; ?></td>

                                    <td><a href="../<?php echo $row['address_publish_photo']; ?>" class="btn btn-sm btn-secondary" target=“_blank”>Publish Photo </a></td>
                                    <td><?php echo $row['party']; ?></td>
                                    <td><?php echo $row['post']; ?></td>
                                    <td><?php echo $row['slogan']; ?></td>
                                    <td><?php echo $row['doc_type_party_or_id_proof']; ?></td>

                                    <td><a href="../<?php echo $row['address_party_or_id_proof']; ?>" class="btn btn-sm btn-secondary">Doc Party Or ID Proof</a></td>
                                    <td><a href="../<?php echo $row['address_motive_latter']; ?>" class="btn btn-sm btn-secondary">Motive Latter</a></td>

                                    <td><a href="../<?php echo $row['address_poster']; ?>" class="btn btn-sm btn-secondary">Poster</a></td>
                                    <td><a href="../<?php echo $row['address_logo']; ?>" class="btn btn-sm btn-secondary">Logo</a></td>
                                    <td><a href="../<?php echo $row['address_speech_video']; ?>" class="btn btn-sm btn-secondary">Speech Video</a></td>

                                    <td><?php echo $row['address_appeal']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>

                                    <td><a href="../../controller/candidate_request_reject_accept.php?&carazyx&caop=<?php echo $row['active_id']; ?>" class="btn btn-sm btn-secondary">Accept</a></td>
                                    <td><a href="../../controller/candidate_request_reject_accept.php?carrxyz&caop=<?php echo $row['active_id']; ?>" class="btn btn-sm btn-secondary">Reject</a></td>

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