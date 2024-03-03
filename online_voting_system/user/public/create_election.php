<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php') ?>
<!-- Navbar End -->

<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form action="../../controller/controller.php" method="POST">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <div class="row g-3" id="get_admin_data">
                            <div class="col-xl-12">
                                <h1 class="m-0 text-center ">Create Election</h1>
                            </div>
                            <div class="col-xl-12">
                                <input type="text" name="organization" class="form-control bg-light border-0" placeholder="Election Organization" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="number" name="mobile_number" class="form-control bg-light border-0" placeholder="Mobile Number" style="height: 55px;">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-dark w-100 py-3" name="otp" id="otp" type="button">Send OTP</button>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control bg-light border-0" name="get_otp" id="get_otp" placeholder="OTP" style="height: 55px;">
                            </div>

                            <div class="col-12">
                                <input class="btn btn-dark w-100 py-3" name="next" id="next" type="button" value="Next">
                            </div><br>
                        </div>
                        <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow d-none zoomIn" id="get_admin_password" data-wow-delay="0.9s">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <h1 class="m-0 text-center">Set Election Admin Password</h1>
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" id="password" class="form-control bg-light border-0" placeholder="Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control bg-light border-0" placeholder="Confirm Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input class="btn btn-dark w-100 py-3" id="create_election" name="create_election" type="submit" value="Submit">
                                </div><br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-3"></div>
    </div>
</div>
</div>
<!-- Quote End -->

<!-- ajax start -->
<?php include('../../controller/ajax_js/public/ajax_create_election.php') ?>
<!-- ajax End -->

<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->