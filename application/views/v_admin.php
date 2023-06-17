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
                                <a href="index.php">
                                    <h2 style="font-size: 36px; margin:auto;">SultanTopUp</h2>
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
                                <a href="<?php echo site_url('c_voucher/index');?>" class="nav-item nav-link">Home</a>
                                <a href="#contact" class="nav-item nav-link">Contact</a>
                                <a href="#job" class="nav-item nav-link">Job Apply</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/IllustriousEducatedEastsiberianlaika-size_restricted.gif" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Admin Page</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->  


            <!-- Blog Start -->
            <div class="blog"id="contact">
                <div class="container" >
                    <div class="section-header text-center">
                        <p>Game</p>
                        <!-- <h2>Latest From Our Responders</h2> -->
                    </div>
        <main id="main">
    <section class="inner-page">    
    <div class="container table-responsive">
        <table class="table table-dark table-striped">
        <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Game</th>
          <th scope="col">Foto</th>
          <th scope="col">Aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php 
            $count = 1;

            //buat looping untuk menampilkan data sd selesai
            foreach($game as $show) {
            // $count++;
            ?>

            <tr>
                <td scope="row"><?= $count ?></td>
                <td><?= $show->nama_game; ?> </td> 
                <td><?= $show->foto_game; ?> </td>
                <td><a href="<?= site_url('c_voucher/linkEdit/' . $show->id_game) ?>" class="link-warning"><i class="bi bi-pencil-square">Edit</i></a>
                &nbsp;
                <a href="<?= site_url('c_voucher/delete/' . $show->id_game)?>" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3">Delete</i></a></td>
                <!-- <td class="text-justify"><?//= $show['message_contact'] ?> </td> -->
            </tr>

            <?php
                //next record
                $count++;
            }
        ?>
        </tbody>
        </table>
    </div>
</section>

</main><!-- End #main -->
            </div>
            </div>
            <!-- Blog End -->

            <!-- Job Start -->
            <div class="job"id="job">
                <div class="container" >
                    <div class="section-header text-center">
                        <p >Voucher</p>
                        <!-- <h2 >Latest From Our Applicants</h2> -->
                    </div>
                    <main id="main" >
    <section class="inner-page">    
    <div class="container table-responsive" >
    <table class="table table-dark table-striped">
        <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Game</th>
          <th scope="col">Aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php 
            $count = 1;

            //buat looping untuk menampilkan data sd selesai
            foreach($voucher as $show) {
            // $count++;
            ?>

            <tr>
                <td scope="row"><?= $count ?></td>
                <td><?= $show->nama_voucher; ?> </td> 
                <td><?= $show->harga_voucher; ?> </td>
                <td><?= $show->id_game; ?> </td>
                <td><a href="<?= site_url('c_voucher/linkEdit/' . $show->id_voucher) ?>" class="link-warning"><i class="bi bi-pencil-square">Edit</i></a>
                &nbsp;
                <a href="<?= site_url('c_voucher/delete/' . $show->id_voucher)?>" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3">Delete</i></a></td>
                <!-- <td class="text-justify"><?//= $show['message_contact'] ?> </td> -->
            </tr>

            <?php
                //next record
                $count++;
            }
        ?>
        </tbody>
        </table>
    </div>
</section>
</main>
</div>
</div>

<div class="job"id="job">
    <div class="container" >
        <div class="section-header text-center">
            <p >Pembayaran</p>
            <!-- <h2 >Latest From Our Applicants</h2> -->
            </div>
                <main id="main" >
            <section class="inner-page">    
            <div class="container table-responsive" >
            <table class="table table-dark table-striped">
            <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
            </thead>

            <tbody>
            <?php 
            $count = 1;

            //buat looping untuk menampilkan data sd selesai
            foreach($pembayaran as $show) {
            // $count++;
            ?>

            <tr>
                <td scope="row"><?= $count ?></td>
                <td><?= $show->nama_pembayaran; ?> </td>
                <td><a href="<?= site_url('c_voucher/linkEdit/' . $show->id_pembayaran) ?>" class="link-warning"><i class="bi bi-pencil-square">Edit</i></a>
                &nbsp;
                <a href="<?= site_url('c_voucher/delete/' . $show->id_pembayaran)?>" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3">Delete</i></a></td>
                <!-- <td class="text-justify"><?//= $show['message_contact'] ?> </td> -->
            </tr>

            <?php
                //next record
                $count++;
            }
            ?>
            </tbody>
            </table>
            </div>
            </section>
        </main>
    </div>
</div>
<!-- End #main -->


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
