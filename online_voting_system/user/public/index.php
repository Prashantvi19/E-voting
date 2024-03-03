 <!-- Navbar start -->
 <?php 
//  include('../navbar_footer/navbar.php') 
 ?>
 <?php 
 include('../navbar_footer/navbar.php') ;
 ?>

 <!-- Navbar End -->

 <!-- Carousel Start -->
 <div class="container-fluid position-relative p-0">
     <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img class="w-100" src="../static/img/desktop-wallpaper-black-backgrounds-black-website-background-thumbnail.jpg" alt="Image">
                 <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                         <h1 class="display-1 text-white mb-md-4 animated zoomIn">"Online Voting System"</h1>
                         <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Welcome</a>
                         <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Thanks for choosing us</a>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <img class="w-100" src="../static/img/diagonal-golden-line-glass-cube-on-black-background-illustration-of-website-banner-poster-sign-corporate-business-social-media-post-billboard-agency-advertising-media-motion-video-animation-wave-vec.jpg" alt="Image">
                 <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                     <h1 class="display-1 text-white mb-md-4 animated zoomIn">"Online Voting System"</h1>
                         <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Welcome</a>
                         <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Thanks for choosing us</a>
                     </div>
                 </div>
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
 </div>
 <!-- carousel End -->

 <!-- Facts Start -->
 <div class="container-fluid facts py-5 pt-lg-0">
     <div class="container py-5 pt-lg-0">
         <div class="row gx-0">
             <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                 <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                     <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                         <i class="fa fa-users text-primary"></i>
                     </div>
                     <div class="ps-4">
                         <h5 class="text-white mb-0">Election Done</h5>
                         <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                 <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                     <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                         <i class="fa fa-check text-white"></i>
                     </div>
                     <div class="ps-4">
                         <h5 class="text-primary mb-0">Total User</h5>
                         <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                 <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                     <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                         <i class="fa fa-award text-primary"></i>
                     </div>
                     <div class="ps-4">
                         <h5 class="text-white mb-0">Running Election</h5>
                         <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Facts Start -->

 <!-- feedbacks slide start  -->
 <?php include('feedbacks_slide.php') ?>
 <!-- feedbacks slide End  -->

 <!-- Footer & JavaScript Libraries start  -->
 <?php include('../navbar_footer/footer.php') ?>
 <!-- Footer & JavaScript Libraries End  -->