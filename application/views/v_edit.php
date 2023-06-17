<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SultanTopUp</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="<?= base_url('asset/img/favicon.ico') ?>" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?= base_url('asset/lib/flaticon/font/flaticon.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('asset/lib/animate/animate.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/lib/slick/slick.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/lib/slick/slick-theme.css') ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <!-- <link href="css/style.css" rel="stylesheet"> -->

		
		<!--Custom Css -->
		<link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
    </head>

    <body>

    
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <h2 style="font-size: 36px;">SultanTopUp</h2>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+012 345 6789</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>ranz@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

	

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="<?php echo site_url('c_voucher/index');?>" class="nav-item nav-link active">Home</a>
                                <!-- <a href="#games" class="nav-item nav-link">Games</a> -->
                                <a href="#team" class="nav-item nav-link">Team</a>
                                <a href="#contact" class="nav-item nav-link">Contact</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Other</a>
                                    <div class="dropdown-menu">
                                        <a href="<?php echo site_url('c_voucher/linkAdmin');?>" class="dropdown-item">Admin Page</a>
                                        <a href="job.php" class="dropdown-item">Job Vacancy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <!-- Looking to join a team of talented individuals and work on exciting projects? Look no further! We're actively seeking passionate and driven individuals to join our dynamic team. Come be a part of our mission to innovate and make a difference in the world. Apply now and let's build the future together! -->

        <form action="<?= site_url('c_voucher/editConfirm/')?>" method="POST" id="registrationForm" enctype="multipart/form-data">
        <input class="form-control" type="hidden" name="id" value="<?= $id?>">
        <br />
        <label for="user_type" class="form-label">Nama Game</label>
        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?= $nama?>" required> <br>
        <br />
        <label for="user_type" class="form-label">Foto Game</label>
        <input class="form-control" type="text" name="foto" id="foto" placeholder="Nama Lengkap" value="<?= $foto?>" required> <br>
    <br />
    <br>
    <div>
        <button class="btn" type="submit" id="submit">Simpan</button>
    </div>
    <br>
</form>

            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-6 col-lg-3"style="margin:auto;">
                            <div class="footer-contact" >
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Jln. Soudirman, Jakarta, Indonesia</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>ranz@gmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3"style="margin:auto;">
                            <div class="footer-link">
                                <h2>Pages</h2>
                                <a href="#about">About Us</a>
                                <a href="#games">Games</a>
                                <a href="#team">Our Team</a>
                                <a href="#contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Ranz Game Studio</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p> </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

