 <!-- Navbar start -->
 <?php include('navbar.php') ?>
 <!-- Navbar End -->

 <!-- Quote Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
     <br><br><br>
     <div class="container py-5">
         <div class="row g-5">
             <div class="col-lg-3">

             </div>
             <div class="col-lg-6">
                 <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                     <form>
                         <div class="row g-3">
                             <div class="col-xl-12">
                                 <h1 class="m-0 text-center">Election</h1>
                             </div>
                             <div class="col-xl-12">
                                 <select class="form-select bg-light border-0 " style="height: 55px;">
                                     <option selected disabled>Select election Organization</option>
                                     <option value="1">One</option>
                                     <option value="2">Two</option>
                                     <option value="3">Three</option>
                                 </select>
                             </div>
                             <div class="col-12">
                                 <input type="text" class="form-control bg-light border-0" placeholder="Organization Allocated ID" style="height: 55px;">
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