<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php') ?>
<!-- Navbar End -->

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Update Mobile Number</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <form action = "../../controller/controller.php" method = "POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="number" class="form-control border-0 bg-light px-4" name="old_contact" placeholder="Old Mobile Number" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control border-0 bg-light px-4" name="old_email" placeholder="E-mail" style="height: 55px;">
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary w-100 py-3" type="button">Send OTP</button>
                        </div>
                        <div class="col-9">
                            <input type="number" class="form-control border-0 bg-light px-4"  placeholder="OTP" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="New Mobile Number" name="new_contact" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input class="btn btn-primary w-100 py-3" type="submit" name="update_mobile_number" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
            </div>
        </div>
    </div>
</div>
<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->