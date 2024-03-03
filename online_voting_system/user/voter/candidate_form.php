<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php') ?>
<!-- Navbar End -->

<?php
$user_belong = $_SESSION["user_belong"];
$voter_id = $_SESSION["id"];
include("../../controller/database.php");
$user_belong = $_SESSION["user_belong"];
$query_org = "SELECT * FROM `candidate` WHERE `active_id` = $voter_id AND `active_org_id` =$user_belong";

$insert = mysqli_query($dbcon, $query_org);

?>

<div class=" py-3 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container  g-0 py-5 px-2 container-fluid ">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Candidate Form </h1>
        </div>
        <?PHP if ($insert->num_rows <= 0) { ?>
            <form action="../../controller/controller.php" method="post" enctype="multipart/form-data">
                <div class="row g-3 ">
                   
                    <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="row g-3">
                            
                            <!-- active and org ids send######### -->

                            <div class="col-3 px-1 ">
                                <label for="name" class="form-label  border-0  px-4">Name:</label>
                            </div>
                            <div class="col-3 px-1">
                                <input class="form-control border-0 bg-light px-4" required type="text" name="official_name" placeholder="Official Name" style="height: 55px;">
                            </div>
                            <div class="col-3 px-3">
                                <div class="row px-1">
                                    <input class="form-control border-0 bg-light px-4" required type="text" name="famous_name" placeholder="Famous Name" style="height: 55px;">
                                </div>
                                <div class="row px-1">
                                    <small class="nav justify-content-end d-flex text-info">[EX. Official Name(Famous
                                        Name)]</small>
                                </div>
                            </div>
                            <div class="col-3">
                               
                                <div class="row px-1">
                                    <input class="form-control border-0 bg-light py-3" id="candidate_photo" required type="file" name="address_publish_photo" placeholder=" Election Photo" style="height: 55px;">
                                </div>
                                <div class="row px-1">
                                    <small class="nav justify-content-end d-flex text-info">[Photo for publishing among
                                        public]</small>
                                </div>
                            </div>

                            <div class="col-3 ">
                                <label for="Election Campaign" class="form-label border-0  px-4">Election Details:</label>
                            </div>
                            <div class="col-3 px-1">
                                <?php
                                $org_id = $_SESSION['user_belong'];
                                include("../../controller/database.php");
                                // $requer_doc = " SELECT * FROM `requer_doc` WHERE `org_id` = '$org_id' AND `doc_requer_for` = 1";
                                $requer_doc = " SELECT * FROM `requer_doc` WHERE `doc_requer_for` = 3 AND `org_id` = '$org_id'";
                                $insert = mysqli_query($dbcon, $requer_doc);
                                ?>
                                <select class="form-select bg-light border-0 " name="party" style="height: 55px;">
                                    <option selected disabled>Select Party</option>
                                    <?php
                                    foreach ($insert as $row) {
                                    ?>
                                        <option value="<?php echo $row['doc_name']; ?>"><?php echo $row['doc_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-3 px-1">
                                <?php
                                // $org_id = $_SESSION['org_id'];
                                // $requer_doc = " SELECT * FROM `requer_doc` WHERE `org_id` = '$org_id' AND `doc_requer_for` = 1";
                                $requer_doc = " SELECT * FROM `requer_doc` WHERE `doc_requer_for` = 4 AND `org_id` = '$org_id'";
                                // include("../../controller/database.php");
                                $insert = mysqli_query($dbcon, $requer_doc);
                                ?>
                                <select class="form-select bg-light border-0 " name="post" style="height: 55px;">
                                    <option selected disabled>Select Post</option>
                                    <?php
                                    foreach ($insert as $row) {
                                    ?>
                                        <option value="<?php echo $row['doc_name']; ?>"><?php echo $row['doc_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-3">
                                <input class="form-control border-0 bg-light px-4" required type="text" name="slogan" placeholder="Slogan" style="height: 55px;">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="col-3 py-1">
                                <label for="Info_for_Approving" class="form-label  border-0  px-4">Info for Backend
                                    Team:*</label>
                            </div>
                            <div class="col-6 py-1 px-2" id="Info_for_Approving">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row px-1">
                                            <label for="doc_type" class="form-label  border-0 justify-content-start d-flex text-mute">Party/ID
                                                Proof</label>
                                        </div>
                                        <div class="row px-1">
                                            <?php
                                            // $org_id = $_SESSION['org_id'];
                                            // $requer_doc = " SELECT * FROM `requer_doc` WHERE `org_id` = '$org_id' AND `doc_requer_for` = 1";
                                            $requer_doc = " SELECT * FROM `requer_doc` WHERE `doc_requer_for` = 5 AND `org_id` = '$org_id' AND `org_id` = '$org_id'";
                                            // include("../../controller/database.php");
                                            $insert = mysqli_query($dbcon, $requer_doc);
                                            ?>
                                            <select id="doc_type" required class="form-select bg-light border-0 " name="doc_type_party_or_id_proof" style="height: 55px;">
                                                <option selected disabled>Select Document Type</option>
                                                <?php
                                                foreach ($insert as $row) {
                                                ?>
                                                    <option value="<?php echo $row['doc_name']; ?>"><?php echo $row['doc_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <div class="row px-1">
                                            <label for="proof_candidate" class="form-label  border-0 justify-content-start d-flex text-mute">Upload
                                                selected Document</label>
                                        </div>
                                        <div class="row px-1">
                                            <input class="form-control border-0 bg-light  py-3 px-1" id="proof_candidate" required type="file" name="address_party_or_id_proof" placeholder="proof" style="height: 55px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 py-1">
                                <div class="row px-1">
                                    <label for="Election_Motive" class="form-label  border-0 justify-content-start d-flex text-mute">What kind of
                                        motive(latter)</label>
                                </div>
                                <div class="row px-2">
                                    <input class="form-control border-0 bg-light py-3" id="Election_Motive" required type="file" name="address_motive_latter" placeholder="What kind of motive " style="height: 55px;">
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <br>
                            <div class="col-12 py-1">
                                <div class="row">
                                    <div class="col-3 ">
                                        <label for="Election_Campaign_Details" class="form-label border-0  px-4">Election
                                            Campaign Details</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="row px-1" id="Election_Campaign_Details">
                                            <div class="col-4">
                                                <div class="row">
                                                    <label for="poster" class="form-label  border-0 justify-content-Start d-flex text-mute">Election
                                                        Poster</label>
                                                </div>
                                                <div class="row">
                                                    <input class="form-control border-0 bg-light py-3" id="poster" required type="file" name="address_poster" placeholder=" Election Poster" style="height: 55px;">

                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="row px-1">
                                                    <label for="logo" class="form-label  border-0 justify-content-start d-flex text-mute">Election
                                                        Logo</label>
                                                </div>
                                                <div class="row px-1">
                                                    <input class="form-control border-0 bg-light py-3" id="logo" required type="file" name="address_logo" placeholder=" Election logo" style="height: 55px;">
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="row px-1">
                                                    <label for="speech" class="form-label  border-0 justify-content-start d-flex text-mute">Election
                                                        Video Speech</label>
                                                </div>
                                                <div class="row px-1">
                                                    <input class="form-control border-0 bg-light py-3" id="speech" required type="file" name="address_speech_video" placeholder=" Election Photo" style="height: 55px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" name="address_appeal" placeholder="Appeal/Message/Why will vote you/Say something..."></textarea>
                            </div>
                            <!--  -->

                            <div class="col-lg-12 text-center position-relative p-3 my-2 mx-auto">
                                <input class="btn btn-primary w-100 py-3" name="candidate_form" type="submit" style="max-width:250px; max-height: 80px;" Value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php } else { ?>
            <div class="col-lg-12 text-center text-danger position-relative p-3 my-2 mx-auto">
                <h1 class=" text-center text-danger " >You have already submitted</h1>
            </div>
        <?php } ?>
    </div>
    
</div>

<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->