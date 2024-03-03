<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php') ?>
<!-- Navbar End -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Add OVS Admin</h1>
        </div>
        <!-- SELECT `id`, `unic_id`, `name`, `email`, `mobile_number`, `password`, `deactivated_by_OVS`, `user_status`, `create_date`, `deactivated_date`, `created_by_id` FROM `ovs_admin` WHERE 1 -->
        <div class="row g-5">
            <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <form action="../../controller/ovs_admin_ad.php" method="POST">
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Admin name" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="text" name="email" class="form-control border-0 bg-light px-4" placeholder="Admin Email" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="text" name="mobile_number" class="form-control border-0 bg-light px-4" placeholder="Admin Number" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="text" name="password" class="form-control border-0 bg-light px-4" placeholder="Password" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="text" name="confirm_password" class="form-control border-0 bg-light px-4" placeholder="Confirm Password" style="height: 55px;">
                        </div>
                    </div>
                    <div class="col-12">
                        <input name="ovs_admin_ad" class="btn btn-primary w-100 py-3" type="submit" value="Submit">
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