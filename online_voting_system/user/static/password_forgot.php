<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php') ?>
<!-- Navbar End -->
<!-- ajax start -->
<?php include('../../controller/ajax_js/static/ajax_login.php') ?>
<!-- ajax End -->

<form action="../../controller/password_forgot.php " method="POST">

    <div class="container-fluid py-5 wow fadeInUp d-none" id="new_password" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Set New Password</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <input type="password" class="form-control border-0 bg-light px-4" name="password" placeholder="New Password" style="height: 55px;">
                        </div>

                        <div class="col-md-12">
                            <input type="password" class="form-control border-0 bg-light px-4" name="confirm_password" placeholder="Confirm New Password" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input class="btn btn-primary w-100 py-3" type="submit" name="forgate_password" value="Set Password">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="reset_password" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Reset Password</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <div class="row g-3 my-3">
                        <?php
                        $query_org = " SELECT `id`,`org_name` FROM `org_admin`";
                        include("../../controller/database.php");
                        $insert = mysqli_query($dbcon, $query_org);
                        ?>
                        <div class="col-xl-12">
                            <select class="form-select bg-light border-0 " name="user_belong" style="height:55px;">
                                <option selected disabled>Select election Organization</option>
                                <?php foreach ($insert as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['org_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <input type="text"  class="form-control border-0 bg-light px-4" name="user_identity" placeholder="Mobile Number/Email Address/User ID" style="height: 55px;">
                        </div>
                        <div class="col-3">
                            <input class="btn btn-primary w-100 py-3" type="button" value="Send OTP">
                        </div>
                        <div class="col-md-9">
                            <input type="number" value="1234" name="otp" class="form-control border-0 bg-light px-4" placeholder="OTP" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input class="btn btn-primary w-100 py-3" id="password_next" type="button" name="next" value="Next">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->