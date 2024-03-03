 <!-- Navbar start -->
 <?php include('../navbar_footer/navbar.php') ?>
 <!-- Navbar End -->
 <!-- ajax start -->
 <?php
 include('../../controller/ajax_js/public/ajax_login.php')
 ?>
 <!-- ajax End -->
 <!-- Quote Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
     <br><br><br>
     <div class="container py-5">
         <div class="row g-5">
             <div class="col-lg-3">
             </div>
             <div class="col-lg-6">
                 <form action="../../controller/controller.php" method="POST">
                     <?php #include('election.php')
                       ?>
                     <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" id="org_select" data-wow-delay="0.9s">
                         <div class="row g-3">
                             <div class="col-xl-12">
                                 <h1 class="m-0 text-center">Documents</h1>
                             </div>
                            

                             <div class="col-xl-12">
                                 <select class="form-select bg-light border-0 " name="doc_requer_for" style="height:55px;">
                                     <option selected disabled>Select Document for</option>
                                     <option value="1">ID Proof</option>
                                     <option value="2">Address Proof</option>
                                     <option value="3">Party Name</option>
                                     <option value="4">Post (Candidate)</option>
                                     <option value="5">Party/ID-Proof</option>
                                 </select>
                             </div>
                             
                             <div class="col-12">
                                 <input class="btn btn-dark w-100 py-3" id="org_next" type="button" value="Next">
                             </div><br>
                             <div class="col-12">
                                 <input class="btn btn-dark w-100 py-3" name = "org_id"  type="hidden" value= <?php echo $_SESSION['id']; ?> >
                             </div>

                         </div>
                     </div>
                     <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn d-none" id="login" data-wow-delay="0.6s">
                         <div class="row g-3">
                             <div class="col-xl-12">
                                 <h1 class="m-0 text-center">Document Name/Option</h1>
                             </div>
                             <div class="col-xl-12">
                                 <input type="text" class="form-control bg-light border-0" name="doc_name" placeholder="Name of Document" style="height: 55px;">
                             </div>
                             
                             <div class="col-12">
                                 <input class="btn btn-dark w-100 py-3" type="submit" name="docrequired" value="docrequired">
                             </div><br>
                         </div>
                     </div>
                 </form>
             </div>

             <div class="col-lg-3">

             </div>
         </div>
     </div>
 </div>
 <!-- Quote End -->

 <!-- Footer & JavaScript Libraries start  -->
 <?php
    include('../navbar_footer/footer.php')
 ?>
 <!-- Footer & JavaScript Libraries End  -->