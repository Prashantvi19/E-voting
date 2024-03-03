<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php') ?>
<!-- Navbar End -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Contact Us</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <form action="../../controller/controller.php" method="POST">
                    <div class="row g-3">
                        <div class="col-6">
                            <input type="text" name="user_name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea name="messages" class="form-control  border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <input name="send_contact" class="btn btn-primary w-100 py-3" type="submit" value="Send Message">
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