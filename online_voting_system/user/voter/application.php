<!-- Navbar start -->

<?php include('../navbar_footer/navbar.php') ?>


<?php
// echo $_SESSION['user_belong'];
include("../../controller/database.php");
$user_belong = $_SESSION["user_belong"];
$voter_id = $_SESSION["id"];
$query_org = "SELECT * FROM `org_participate_voter` WHERE `voter_id` = $voter_id AND `active_org_id` = $user_belong ";

$insert = mysqli_query($dbcon, $query_org);
// $data = $insert->fetch_assoc();
?>
<!-- Navbar End -->

<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container g-0 py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Application</h1>
        </div>
        <?PHP if ($insert->num_rows <= 0) { ?>

            <form action="../../controller/controller.php" method="post" enctype="multipart/form-data">

                <!-- #################active ID send from it -->
                <div class="col-3">
                    <input class="form-control border-0 bg-light px-4" type="hidden" placeholder="active_org_id hidden" name="active_org_id" style="height: 55px;" value="<?php echo $_SESSION['user_belong']; ?>">
                    <input class="form-control border-0 bg-light px-4" type="hidden" placeholder="voter_id hidden" name="voter_id" style="height: 55px;" value="<?php echo $_SESSION['user_id']; ?>">
                </div>


                <!--active ID send from it##############  -->
                <div class="row g-3 ">
                    
                    <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="row g-3">
                            <div class="col-3 ">
                                <label for="name" class="form-label  border-0  px-4">Name:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control border-0 bg-light px-4" required type="text" placeholder="First Name" name="first_name" style="height: 55px;">
                            </div>
                            <div class="col-3">
                                <input class="form-control border-0 bg-light px-4" required type="text" placeholder="Middle Name" name="middle_name" style="height: 55px;">
                            </div>
                            <div class="col-3 px-1">
                                <input class="form-control border-0 bg-light px-4" required type="text" placeholder="Last Name" name="last_name" style="height: 55px;">
                            </div>
                            <!--  -->
                            <div class="col-3">
                                <label for="personal" class="form-label border-0  px-4">Personal Details:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control border-0 bg-light px-4" required type="date" placeholder="Enter Your DOB" name="dob" style="height: 55px;">
                            </div>
                            <div class="col-3">
                                <input class="form-control border-0 bg-light px-4" required type="number" pattern="[0-9]{10}" maxlength="10" placeholder="Enter Your Mobile No." name="mobile_number" style="height: 55px;">
                            </div>
                            <div class="col-3 px-1">
                                <input class="form-control border-0 bg-light px-4" required type="email" placeholder="Enter Your Email ID" name="email" style="height: 55px;">
                            </div>
                            <!--  -->
                            <div class="col-3 ">
                                <label for="personal" class="form-label border-0  px-4">Profile Picture</label>
                            </div>

                            <div class="col-3">
                                <input class="form-control border-0 bg-light py-3" required type="file" name="address_profile_photo" style="height: 55px;">
                            </div>

                            <div class="col-6 px-3 ">
                                <div class="row border-0 bg-light py-3 px-5 " style="height: 55px;">
                                    <span class="col-md-3">
                                        <label class="form-label">Gender :</label>
                                    </span>
                                    <div class="col-9 px-4 ">
                                        <span class=" row ">
                                            <span class="col-4  form-check ">
                                                <input class="form-check-input " type="radio" name="gender" value="MALE" id="MALE">

                                                <label class="form-check-label " for="MALE"> MALE </label></span>
                                            <span class="col-4  form-check ">
                                                <input class="form-check-input" type="radio" name="gender" value="FEMALE" id="FEMALE">
                                                <label class="form-check-label" for="FEMALE"> FEMALE </label></span>

                                            <span class="col-4 form-check ">
                                                <input class="form-check-input" type="radio" name="gender" value="OTHER" id="OTHER">
                                                <label class="form-check-label" for="OTHER"> OTHER </label></span>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <!--  -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3">
                                        <label for="address" class="form-label  border-0  px-4">Address and Address
                                            Proof:</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="row px-1" id="address">
                                            <div class="col-3 p-1">
                                                <input class="form-control border-0 bg-light px-4" required type="text" placeholder="Country" name="country" style="height: 55px;">

                                            </div>
                                            <div class="col-3 p-1">
                                                <input class="form-control border-0 bg-light px-4" required type="text" placeholder="State" name="state" style="height: 55px;">

                                            </div>
                                            <div class="col-3 p-1">
                                                <input class="form-control border-0 bg-light px-4" required type="text" placeholder="District" name="district" style="height: 55px;">

                                            </div>
                                            <div class="col-3 p-1">
                                                <input class="form-control border-0 bg-light px-4" required type="text" placeholder="Tehsil" name="tahsil" style="height: 55px;">

                                            </div>

                                            <div class="col-3 p-1">
                                                <input class="form-control border-0 bg-light px-4" required type="text" placeholder="City/Village" name="city" style="height: 55px;">
                                            </div>
                                            <div class="col-3 p-1">
                                                <input class="form-control border-0 bg-light py-3" required type="text" pattern="[0-9]{000000-999999}" maxlength="6" placeholder="Pin Code" name="pin_code" style="height: 55px;">
                                            </div>
                                            <div class="col-3 p-1">
                                                <?php
                                                $org_id = $_SESSION['user_belong'];
                                                include("../../controller/database.php");
                                                // INSERT INTO `requer_doc`(`id`, `org_id`, `doc_requer_for`, `doc_name`, `create_at`, `update_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
                                                $requer_doc = " SELECT * FROM `requer_doc` WHERE `doc_requer_for` = 2 AND `org_id` = '$org_id'";
                                                $insert = mysqli_query($dbcon, $requer_doc);
                                                ?>
                                                <select class="form-select bg-light border-0" required name=" type_address_proof" style="height: 55px;">

                                                    <option selected disabled>Select Document Type</option>
                                                    <?php
                                                    foreach ($insert as $row) {
                                                    ?>
                                                        <option value="<?php echo $row['doc_name']; ?> "> <?php echo $row['doc_name']; ?> </option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-3 p-1">
                                                <input class="form-control border-0 bg-light  py-3 px-1" required type="file" name=" doc_address_proof" style="height: 55px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-3">
                                <label for="" class="form-label  border-0  px-4">ID Proof:</label>
                            </div>
                            <div class="col-6 px-2">
                                <div class="row">
                                    <div class="col-6 p-1">
                                        <?php
                                        // $requer_doc = " SELECT * FROM `requer_doc` WHERE `org_id` = '$org_id' AND `doc_requer_for` = 2";
                                        $requer_doc = " SELECT * FROM `requer_doc` WHERE `doc_requer_for` = 1 AND `org_id` = '$org_id'";
                                        $insert = mysqli_query($dbcon, $requer_doc);
                                        ?>
                                        <select class="form-select bg-light border-0 " style="height: 55px;" required name="type_id_proof">
                                            <option selected disabled>Select Document Type</option>
                                            <?php
                                            foreach ($insert as $row) {
                                            ?>
                                                <option value="<?php
                                                                echo $row['doc_name'];
                                                                ?>"><?php
                                                                echo $row['doc_name'];
                                                                ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-6 p-1">
                                        <input class="form-control border-0 bg-light  py-3 px-1" name="id_proof" required type="file" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <small class="nav justify-content-end d-flex text-dark">(In case educated 10th
                                        marks/latter certified by school*.)</small>
                                </div>
                            </div>
                            <div class="col-3 px-3 pt-1 mb-1">
                                <div class="row ">
                                    <div class="col-12 bg-light border-0 py-3">
                                        <input class="form-check-input " type="checkbox" name="literate_status" value="Untutored" id="literate_status">
                                        <label class="form-check-label " for="literate_status">Untutored </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <small class="nav justify-content-end d-flex text-dark">(In case untutored
                                        select*.)</small>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-lg-12 text-center position-relative p-3 my-3 mx-auto">
                                <input class="btn btn-primary w-100 py-3" type="submit" style="max-width:250px; max-height: 80px;" name="application" value="Submit">
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        <?php } else { ?>
            <div class="col-lg-12 text-center text-danger position-relative p-3 my-2 mx-auto">
                <h1 class=" text-center text-danger ">You have already submitted</h1>
            </div>
        <?php } ?>
    </div>
   
</div>

<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->