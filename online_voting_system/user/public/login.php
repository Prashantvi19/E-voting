 <!-- Navbar start -->
 <?php include('../navbar_footer/navbar.php') ?>
 <!-- Navbar End -->
 <!-- ajax start -->
 <?php include('../../controller/ajax_js/public/ajax_login.php') ?>
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
                                 <h1 class="m-0 text-center">Election</h1>
                             </div>
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
                             <div class="col-12">
                                 <input class="btn btn-dark w-100 py-3" id="org_next" type="button" value="Next">
                             </div><br>
                         </div>
                     </div>
                     <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn d-none" id="login" data-wow-delay="0.6s">
                         <div class="row g-3">
                             <div class="col-xl-12">
                                 <h1 class="m-0 text-center">Login</h1>
                             </div>
                             <div class="col-xl-12">
                                 <input type="text" class="form-control bg-light border-0" name="user_id" placeholder="Your Username" style="height: 55px;">
                             </div>
                             <div class="col-12">
                                 <input type="password" class="form-control bg-light border-0" name="password" placeholder="Your Password" style="height: 55px;">
                             </div>
                             <div class="col-12">
                                 <input class="btn btn-dark w-100 py-3" type="submit" name="login" value="Login">
                             </div><br>
                         </div>
                     </div>
                 </form>
                 <span> <a href="../static/password_forgot.php"><b>Reset Password?</b></a> </span>
                 <span>  <a href="../public/signup.php"><b>Voter signup</b></a> </span>
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