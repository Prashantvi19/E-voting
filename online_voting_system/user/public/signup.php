<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php') ?>
<!-- Navbar End -->

<!-- ajax start -->
<?php include('../../controller/ajax_js/public/ajax_signup.php');?>
<!-- ajax End -->

<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <br>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">
                <form action="../../controller/controller.php" method="POST">
                <?php include('election.php') ?>
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn d-none" id="signup" data-wow-delay="0.9s">
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <h1 class="m-0 text-center">Sign Up</h1>
                            </div>
                            <!-- UPDATE `org_participate` SET `id`='[value-1]',`user_belong`='[value-2]',`org_email_id`='[value-3]',`org_mobile_number`='[value-4]',`first_name`='[value-5]',`middle_name`='[value-6]',`last_name`='[value-7]',`email_by_voter`='[value-8]',`mobile_number_by_voter`='[value-9]',`password`='[value-10]' WHERE 1 -->
                            <div class="col-xl-4">
                                <input type="text" class="form-control bg-light border-0" name="first_name" placeholder="First Name" style="height: 55px;">
                            </div>
                            <div class="col-xl-4">
                                <input type="text" class="form-control bg-light border-0" name="middle_name" placeholder="Middle Name" style="height: 55px;">
                            </div>
                            <div class="col-xl-4">
                                <input type="text" class="form-control bg-light border-0" name="last_name" placeholder="Last Name" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <input type="email" class="form-control bg-light border-0" name="email_by_voter" placeholder="E-mail Address" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <input type="phone" class="form-control bg-light border-0" name="mobile_number_by_voter" placeholder="Mobile Number" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <input type="password" class="form-control bg-light border-0" name="password" placeholder="Create Password" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <input type="password" class="form-control bg-light border-0" name="confirm_password" placeholder="Confirm Password" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input class="btn btn-dark w-100 py-3" name="signup_participate" type="submit" value="Sign up">
                            </div><br>
                        </div>
                    </form>
                </div>
                <span>  <a href="../static/password_forgot.php"><b>Reset Password?</b></a> </span>
                <span>  <a href="../public/login.php"><b>Login </b></a> </span>
            </div>

            <div class="col-lg-3">

            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->