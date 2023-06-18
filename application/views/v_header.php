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