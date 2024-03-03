<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OVS</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="../template/images/favicon.png" /> -->
</head>


<body>
    <div style="overflow:hidden; overflow-y: hidden;
  overflow-x: hidden" class="container-scroller" scrolling="no">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <!-- <a class="navbar-brand brand-logo" href="index.html"><img src="../template/images/logo.svg" alt="logo" /></a> -->
                <a href="#" class="navbar-brand  p-0">
                    <h1 class="m-0"><i class="navbar-brand brand-logo fa fa-user-tie me-2"></i>OVS</h1>
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../template/images/logo-mini.svg" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                <!--start manubar Admin Code -->

                <ul class="navbar-nav mr-lg-2">
                    <!--Start This cod for org and ovs admins -->
                    <li class="nav-item  d-none d-lg-flex">
                        <a class="nav-link" href="../ovs_admin/index.php">
                            Dashboard
                        </a>
                    </li>
                </ul>

                <!-- end manubar Admin Code -->

            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <!-- Start org and ovs code -->
                    <li class="nav-item">
                        <div class="d-flex sidebar-profile">
                            <div class="sidebar-profile-image">
                                <img src="../template/images/faces/face29.png" alt="image">
                                <span class="sidebar-status-indicator"></span>
                            </div>
                            <div class="sidebar-profile-name">
                                <p class="sidebar-name">
                                    Kenneth Osborne
                                </p>
                                <p class="sidebar-designation">
                                    Welcome
                                </p>
                            </div>
                        </div>
                    </li>
                    <span>
                        <hr class="dropdown-divider">
                    </span>
                    <div class="nav-search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search">
                                    <i class="typcn typcn-zoom"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span>
                        <hr class="dropdown-divider">
                    </span>
                    <!-- end org and ovs code -->
                    <?php $login_type = $_SESSION['user_type']; ?> <!-- admins Panal -->
                    <div id="adminNavbar">
                    </div>
                    <script src="../navbar_footer/navbarOvsOrg.js"></script>
                    <script language="javascript">
                        var loginType = '<?php echo $login_type; ?>';
                        if (loginType != null || loginType != 0) {

                        } else {
                            var loginType = 0
                        }

                        //    console.log(loginType)
                        // console.log(loginType);
                        addAdminNavbar(loginType);
                    </script>
                    <!-- admins Panal  -->

                    <span>
                        <hr class="dropdown-divider">
                    </span>

                </ul>
            </nav>

            <div class="container-fluid position-relative px-3 d-inline-block text-center h-100 w-100">
                <div class="container-fluid position-relative px-3 d-inline-block text-center h-100 w-100" style="overflow:scroll; overflow:hidden;">
                    <?php if (isset($_GET['msg']) && $_GET['msg'] != 0) {
                        $mgs = $_GET['msg']; ?>                        
                        <script>
                            window.alert('<?php echo $mgs; ?>');
                        </script>
                    <?php $a = 1;
                    }
                    if ($_GET['msg'] != 0 && $a == 1) {
                        $_GET['msg'] = 0;
                    } ?>