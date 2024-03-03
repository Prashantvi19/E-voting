<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php'); ?>
<!-- Navbar End -->
<?php
if (isset($_GET['vpc'])) {

    // SELECT SELECT `id`, `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `accepted_by_ID`, `created_at`, `updated_at` FROM `candidate` WHERE 1
    include("../../controller/database.php");
    $active_id = $_GET["can"];
    $user_belong = $_SESSION["user_belong"];

    $query_org = "SELECT  `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`,`address_poster`, `address_logo`, `address_speech_video`, `address_appeal` FROM `candidate`  WHERE `active_org_id` = $user_belong AND `active_id` = '$active_id' ";
    $insert = mysqli_query($dbcon, $query_org);
    $data = $insert->fetch_assoc();
    // print_r($data);
    //    die;
?>
    <!--  -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                   
                </div>
            </div>
            <h1 class="display-4 text-white animated zoomIn"></h1>
        </div>
    </div>
    <!--  -->
    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Candidate Appeal</h1>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4  wow zoomIn" data-wow-delay="0.2s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="../<?php echo $data['address_publish_photo']; ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-12 wow zoomIn my-1" data-wow-delay="0.4s">
                    <div class="row mx-auto bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 60px;">
                        <i class=" col-12 fa text-center text-white">Name</i>
                    </div>
                    <div class="row mx-auto">
                        <h4 class="col-12 text-center"><?php echo $data['official_name']; ?></h4>
                        <h4 class="col-12 text-center">(<?php echo $data['famous_name']; ?>)</h4>
                    </div>
                </div>
            </div>
            <div class="row my-3 g-5">
                
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.5s">
                    <iframe class="position-relative rounded w-100 h-100" src="../<?php echo $data['address_poster']; ?>" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100" src="../<?php echo $data['address_speech_video']; ?>" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4 wow zoomIn" data-wow-delay="0.7s">
                    <div class="row mx-auto bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 60px;">
                        <i class=" col-12 fa text-center text-white">Party</i>
                    </div>
                    <div class="row ">
                        <h4 class="col-12 text-center"><?php echo $data['party']; ?></h4>
                    </div>
                </div>
                <div class="col-4 wow zoomIn" data-wow-delay="0.8s">
                    <div class="row mx-auto bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 60px;">
                        <i class=" col-12 fa text-center text-white">Post</i>
                    </div>
                    <div class="row ">
                        <h4 class="col-12 text-center"><?php echo $data['post']; ?></h4>
                    </div>
                </div>

                <div class="col-4 wow zoomIn" data-wow-delay="0.9s">
                    <div class="row mx-auto bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 60px;">
                        <i class=" col-12 fa text-center text-white">Slogan</i>
                    </div>
                    <div class="row">
                        <h4 class="col-12 text-center"><?php echo $data['slogan']; ?></h4>
                    </div>
                </div>
                <div class="col-4 wow zoomIn" data-wow-delay="0.10s">
                    <div class="row mx-auto bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 60px;">
                        <i class="col-12 fa text-center text-white">Logo</i>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12   position-relative h-100 wow zoomIn" data-wow-delay="0.11s" style=" min-height: 150px; padding-left: 5rem;">
                        <iframe class="position-relative rounded w-100 h-100" src="../<?php echo $data['address_poster']; ?>" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <!-- Poster and Speech End -->
        <div class="row g-5">
            <div class="col-lg-12"  data-wow-delay="0.12s">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    
                    <h1 class="mb-4">Appeal</h1>
                   
                    <p style="word-wrap: break-word;"><?php echo $data['address_appeal'];?></p>
                        
                </div>
                <!-- Blog Detail End -->


            </div>

          
        </div>


        
    </div>
    <!-- Features Start -->
<?php } ?>
<!--  -->


<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->