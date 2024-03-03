<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php');
// include('../online_voting_system/controller/profile.php')


?>
<!-- Navbar End -->
<div class="w-100 h-100 container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

    <div class="row">
        <div class=" col-lg-4 px-5 offset-5">
            <div class="section-title  position-relative" style="max-width: 600px;">
                <h1 class="mb-0 ">Profile</h1>
            </div>
        </div>

        
    </div>

    <div class="container-fluid p-5">
        <form>
            <div class="row g-5">
                
                <?php foreach ($_SESSION as $row => $values) {

                ?>

                    <div class="col-4 bg-light border border-dark wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="row g-3">
                            <div class="col-4 border border-bottom-0  border-top-0 border-start-0 border-success text-center">
                                <b><?php echo $row; ?></b>
                            </div>
                            <div class="col-8 text-center ">
                                <span><?php echo $values; ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </form>
    </div>
    
</div>

<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->