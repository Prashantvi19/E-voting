<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OVS</title>
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">


    <link rel="stylesheet" href="sweet-modal/dist/min/jquery.sweet-modal.min.css" />
    <script src="sweet-modal/dist/min/jquery.sweet-modal.min.js"></script>
</head>

<body>
    

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Indore</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>infosdada@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar  Start -->
    <div id="publicUserAdminsNavbar" class="container-fluid position-relative p-0">
    </div>
    <?php $login_type = $_SESSION['user_type']; ?>
    <script src="../../user/navbar_footer/navbarPublicUserAdmins.js"></script>
    <script language="javascript">
        var loginType = '<?php echo $login_type; ?>';
        if (loginType != null || loginType != 0) {

        } else {
            var loginType = 0
        }

        // console.log(loginType);
        addpublicUserAdminsNavbar(loginType);
    </script>
    </div>
    <!-- Navbar End -->
    <?php if (isset($_GET['msg']) && $_GET['msg'] != 0) {
        $mgs = $_GET['msg']; ?>
        <!-- <div class="alert alert-warning" role="alert"> -->
        <script>
            window.alert('<?php echo $mgs; ?>');
        </script>
        <!-- </div>  -->
    <?php $a = 1;
    }
    if ($_GET['msg'] != 0 && $a == 1) {
        $_GET['msg'] = 0;
    } ?>