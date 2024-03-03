
const publicNavbar = `  <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
<div class="collapse navbar-collapse " id="navbarCollapse">

    <!-- Login Button For Publik  page start -->

    <a href="../public/login.php" class="btn btn-primary py-2 px-4 ms-3 text-left">Sign In</a>

    <!-- Login Button For Publik  page end-->
    </div>
    <!-- Start Nav bar botton Home, Service,About, feedback, deshboard (org or Ovs), contact, create election code -->

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto px-4 py-0">

            <!--start Code for Ovs and Org admin ,User,Public  -->

            <a href="../public/index.php" class="nav-item nav-link active">Home</a>

            <!--start Code for Ovs and Org admin ,User,Public  -->

            <!--start Code for Public  -->

            <a href="../public/create_election.php" class="nav-item nav-link">Organize Election</a>

            <!-- End Code for Public  -->

            <!--start Code for Org admin ,User,Public  -->

             <a href="../public/about.php" class="nav-item nav-link">About</a>
            <a href="#" class="nav-item nav-link">Services</a>

            <!--end Code for Org admin ,User,Public  -->

            <!--start Code for Org admin ,User,Public  -->

            <a href="../static/contact.php" class="nav-item nav-link">Contact</a>

            <!--start Code for Org admin,User,Public  -->

        </div>
        <!-- end Nav bar botton Home, Service,About, feedback, deshboard (org or Ovs), contact, create election code-->
    </div>

    <!-- Start this logo which use for all page -->

    <a href="index.php" class="navbar-brand  p-0">
        <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>OVS</h1>
    </a>

    <!-- Start this logo which use for all page -->
</nav>`;

const userNavbar = ` <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">


<div class="collapse navbar-collapse " id="navbarCollapse">

    <!-- start User code -->
    <!-- 


    <div class="nav-item dropdown m-0 p-0 d-inline-flex text-left">
        <div class="nav-item dropdown " width="32" height="32">
        
            <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-fluid rounded-circle" width="60" height="60" fill="currentColor" src="../templete/img/testimonial-4.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center ">
                    <img class="img-md rounded-circle" src="../templete/img/testimonial-4.jpg" alt="Profile image">
                    <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                    <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div> 
                <span>
                    <hr class="dropdown-divider">
                </span>
                <a class="dropdown-item" href="../static/profile.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>My Profile</a>
                <a class="dropdown-item" href="../static/logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>

                <span>
                    <hr class="dropdown-divider">
                </span>

                <a class="dropdown-item" href="../static/change_password.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Change Password</a>
                <a class="dropdown-item" href="../static/password_forgot.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Reset Password</a>


            </div>
        </div>
    </div>

    -->
    <!-- End User code -->

    <!-- End code for only org admin and user -->

    <div class="nav-item dropdown " width="32" height="32">
        <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify">
                <line x1="21" y1="10" x2="3" y2="10"></line>
                <line x1="21" y1="6" x2="3" y2="6"></line>
                <line x1="21" y1="14" x2="3" y2="14"></line>
                <line x1="21" y1="18" x2="3" y2="18"></line>
            </svg></a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="UserDropdown">
            <a class="dropdown-item" href="../voter/application.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Apply For Voting</a>
            <a class="dropdown-item" href="../voter/candidate_form.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Apply For Candidate</a>
            <a class="dropdown-item" href="../static/vote.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Drop Vote</a>
           

            <!-- It is not for evryone only view purpose it will open when click on candidate page link-->
            <!-- 
            <a class="dropdown-item" href="../static/candidate_appeal.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Candidate Appeal It For only view not permannet</a>
            -->
            <!-- It is not for evryone only view purpose it will open when click on candidate page link-->

            <!-- Login Button For user berfor singup  page start -->

            <!--  <a class="dropdown-item" href="../public/signup.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>SingUp</a> -->

            <!-- Login Button For user berfor singup  page start -->

           
            <span>
                <hr class="dropdown-divider">
            </span>
            <a class="dropdown-item" href="../static/candidate.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Candidates</a>
            <a class="dropdown-item" href="../static/result.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Election Winner</a>
            <a class="dropdown-item" href="../static/candidates_votes.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Candidates Result list</a>
            <span>
                    <hr class="dropdown-divider">
                </span>
                <a class="dropdown-item" href="../static/profile.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>My Profile</a>
                <a class="dropdown-item" href="../static/logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>

                <span>
                    <hr class="dropdown-divider">
                </span>

                <a class="dropdown-item" href="../static/change_password.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Change Password</a>
                <a class="dropdown-item" href="../static/password_forgot.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Reset Password</a>


        </div>
    </div>
</div>



<!-- End code for only org admin and user -->



<!-- Start Nav bar botton Home, Service,About, feedback, deshboard (org or Ovs), contact, create election code -->


<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto px-4 py-0">

        <!--start Code for Ovs and Org admin ,User,Public  -->

        <a href="../public/index.php" class="nav-item nav-link active">Home</a>

        <!--start Code for Ovs and Org admin ,User,Public  -->



        <!--start Code for Org admin ,User,Public  -->

        <a href="../public/about.php" class="nav-item nav-link">About</a>
        <a href="#" class="nav-item nav-link">Services</a>

        <!--end Code for Org admin ,User,Public  -->


        <!-- Code start for user Org admin -->

        <a href="../static/feedback.php" class="nav-item nav-link">Feedback</a>

        <!-- Code End for user Org admin -->


        <!--start Code for Org admin ,User,Public  -->

        <a href="../static/contact.php" class="nav-item nav-link">Contact</a>

        <!--start Code for Org admin,User,Public  -->

    </div>
    <!-- end Nav bar botton Home, Service,About, feedback, deshboard (org or Ovs), contact, create election code-->
</div>

<!-- Start this logo which use for all page -->

<a href="index.php" class="navbar-brand  p-0">
    <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>OVS</h1>
</a>

<!-- Start this logo which use for all page -->
</nav>`;


const orgAdminNavbar = `  <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">

<div class="collapse navbar-collapse " id="navbarCollapse">



    <!-- End code for only org admin and user -->

    <div class="nav-item dropdown " width="32" height="32">
        <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify">
                <line x1="21" y1="10" x2="3" y2="10"></line>
                <line x1="21" y1="6" x2="3" y2="6"></line>
                <line x1="21" y1="14" x2="3" y2="14"></line>
                <line x1="21" y1="18" x2="3" y2="18"></line>
            </svg></a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="UserDropdown">
        <!--  <a class="dropdown-item" href="../voter/application.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Apply For Voting</a>
            <a class="dropdown-item" href="../voter/candidate_form.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Apply For Candidate</a>
            <a class="dropdown-item" href="../static/vote.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Drop Vote</a> -->
            

            <!-- It is not for evryone only view purpose it will open when click on candidate page link -->

            <!--   <a class="dropdown-item" href="../static/candidate_appeal.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Candidate Appeal It For only view not permannet</a>  -->

            <!-- It is not for evryone only view purpose it will open when click on candidate page link-->



            <span>
                <hr class="dropdown-divider">
            </span>
            <a class="dropdown-item" href="../static/candidate.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Candidates</a>
            <a class="dropdown-item" href="../static/result.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Election Winner</a>
            <a class="dropdown-item" href="../static/candidates_votes.php"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Candidates Result list</a>

            <!-- start Only for org admin code -->

        </div>
    </div>
</div>



<!-- Start Nav bar botton Home, Service,About, feedback, deshboard (org or Ovs), contact, create election code -->


<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto px-4 py-0">

        <!--start Code for Ovs and Org admin ,User,Public  -->

        <a href="../public/index.php" class="nav-item nav-link active">Home</a>

        <!--start Code for Ovs and Org admin ,User,Public  -->


        <!--start Code for Org and Ovs Admin  -->

        <!-- <a href="../../admin/ovs_admin/index.php" class="nav-item nav-link">Dashboard</a> -->

        <!-- End Code for Org and Ovs Admin  -->


        <!--start Code for Org admin ,User,Public  -->

         <a href="../public/about.php" class="nav-item nav-link">About</a>
        <a href="#" class="nav-item nav-link">Services</a>

        <!--end Code for Org admin ,User,Public  -->


        <!-- Code start for user Org admin -->

        <a href="../static/feedback.php" class="nav-item nav-link">Feedback</a>

        <!-- Code End for user Org admin -->


        <!--start Code for Org admin ,User,Public  -->

        <a href="../static/contact.php" class="nav-item nav-link">Contact</a>

        <!--start Code for Org admin,User,Public  -->

    </div>
    <!-- end Nav bar botton Home, Service,About, feedback, deshboard (org or Ovs), contact, create election code-->
</div>

<!-- Start this logo which use for all page -->

<a href="index.php" class="navbar-brand  p-0">
    <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>OVS</h1>
</a>

<!-- Start this logo which use for all page -->
</nav>`;

const ovsAdminNavbar = `  <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">

<div class="collapse navbar-collapse " id="navbarCollapse">

</div>
<!-- Start Nav bar botton Home, Service,About, feedback, deshboard (org or Ovs), contact, create election code -->


<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto px-4 py-0">

        <!--start Code for Ovs and Org admin ,User,Public  -->

        <a href="../public/index.php" class="nav-item nav-link active">Home</a>

        <!--start Code for Ovs and Org admin ,User,Public  -->


        <!--start Code for Org and Ovs Admin  -->

        <!-- <a href="../../admin/ovs_admin/index.php" class="nav-item nav-link">Dashboard</a> -->

        <!-- End Code for Org and Ovs Admin  -->


    </div>
    <!-- end Nav bar botton Home, Service,About, feedback, deshboard (org or Ovs), contact, create election code-->
</div>

<!-- Start this logo which use for all page -->

<a href="index.php" class="navbar-brand  p-0">
    <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>OVS</h1>
</a>

<!-- Start this logo which use for all page -->
</nav>`;



const publicUserAdminsNavbar = document.getElementById('publicUserAdminsNavbar');

function addpublicUserAdminsNavbar(a) {
    // console.log(a)


    if (a == 5) {
        publicUserAdminsNavbar.innerHTML = ovsAdminNavbar;

    } else if (a == 1 || a == 3) {
        publicUserAdminsNavbar.innerHTML = userNavbar;
    }
    else if (a == 2) {
        publicUserAdminsNavbar.innerHTML = orgAdminNavbar;
    }
    else {

        publicUserAdminsNavbar.innerHTML = publicNavbar;
    }


}
