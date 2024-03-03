<!-- Navbar start -->
<?php include('navbar.php') ?>
<!-- Navbar End -->

<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">

    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <h1 class="m-0 text-center">Create Election</h1>
                            </div>
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Election Organization" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control bg-light border-0" placeholder="Mobile Number" style="height: 55px;">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-dark w-100 py-3" type="submit">Send OTP</button>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control bg-light border-0" placeholder="OTP" style="height: 55px;">
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Next</button>
                            </div><br>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">

            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

<!-- Footer & JavaScript Libraries start  -->
<?php include('footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->