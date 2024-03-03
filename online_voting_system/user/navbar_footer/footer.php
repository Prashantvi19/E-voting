<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>OVS</h1>
                    </a>
                   
                    <form action="">
                    <?php if($login_type == 2||$login_type == 1 || $login_type == 3||$login_type == 5){?>
                        <div class="input-group ">
                           
                        </div>
                        <?php }else if(true){?>
                        <div class="input-group ">
                            <a class="form-control btn btn-primary bg-dark border-white " href="../public/ovs_login.php"> Login</a>
                            
                            <a class="form-control btn btn-primary bg-dark border-white" href="../public/signup.php">Sign Up</a>
                            
                        </div>
                        <?php }?>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            
                        </div>
                       
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">indffo@example.com</p>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0"></h3>
                            
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+91 345 67890</p>
                        </div>
                      
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                          
                            <h3 class="text-light mb-0"></h3>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">OVS</a>. All Rights Reserved.

                        
                        Designed by <a class="text-white border-bottom" href="#">Prashant Vishwakarma</a>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Footer & JavaScript Libraries End  -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/wow/wow.min.js"></script>
<script src="../../lib/easing/easing.min.js"></script>
<script src="../../lib/waypoints/waypoints.min.js"></script>
<script src="../../lib/counterup/counterup.min.js"></script>
<script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../js/main.js"></script>


<!-- Template Javascript -->

</body>

</html>