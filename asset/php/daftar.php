<?php
  include ('koneksi.php');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Chalish Cloud</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="../css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="../js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="../index.html">Chalish Cloud</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="../index.html"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="#">Job Recruit</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		
			
			<br> <br> <br>
			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Application Form</h2>
							<p class="wow animated bounceInRight">Register Kuy</p>
						</div>
						
						
						
					</div>
                    <br>    <br>

                    
                    <?php 
                    //kaitkan dengan data referensi
                    include_once "data_ref.php";

                    //ambil list dept
                    $list_pendidikan = f_pendidikan();

                    //ambil list job_level
                    $list_pekerjaan = f_pekerjaan();
                ?>  
                    
				</div>

                <form method="post" action="daftar_action.php" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="nama_pendaftar">Name</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" id="nama_pendaftar" name="nama_pendaftar" placeholder="Name.." required>
                        </div>
                    </div>
                    <hr>
                    

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="umur_pendaftar">Age</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="number" id="umur_pendaftar" name="umur_pendaftar" placeholder="Age.."  min="17" required >
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="telpon_pendaftar">Phone</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" id="telpon_pendaftar" name="telpon_pendaftar" placeholder="Phone.." required>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="alamat_pendaftar">Address</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" id="alamat_pendaftar" name="alamat_pendaftar" placeholder="Address.." required>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="email_pendaftar">Email</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="email" id="email_pendaftar" name="email_pendaftar" placeholder="Email.." required>
                        </div>
                    </div>
                    <hr>
                    

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="pendididkan">Last Education</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                        <select id="pendidikan" name="id_pendidikan" required>
                        <?php
                        //ulangi untuk semua elemen dept
                        foreach ($list_pendidikan as $d){
                            echo "<option value=$d[id_pendidikan]>" . $d['nama_pendidikan'] . "</option>";
                        }            
                        ?>
                        </select>
                        </div>
                    </div>
                    <hr>
                    

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="foto_pendaftar">Photo</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="file" accept=".jpg,.jpeg,.png" id="foto_pendaftar" name="foto_pendaftar" required>
                        </div>
                    </div>
                    <hr>
                    

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="cv_pendaftar">CV</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="file" accept=".pdf" id="cv_pendaftar" name="cv_pendaftar" required>
                        </div>
                    </div>
                    <hr>
                   

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <label for="pekerjaan">Choose Your Job</label>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-3">
                        <select id="pekerjaan" name="id_pekerjaan" required>
                        <?php
                        //ulangi untuk semua elemen dept
                        foreach ($list_pekerjaan as $d){
                            echo "<option value=$d[id_pekerjaan]>" . $d['nama_pekerjaan'] . "</option>";
                        }            
                        ?>
                        </select>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-primary btn-effect" value="Submit" name="CreateSubmit" onclick="return confirm('Are you not gonna regret this ?')">
                        </div>

                        <div class="col-md-1">
                            <input type="submit" class="btn btn-danger btn-effect" value="Cancel" name="CancelSubmit">
                        </div>
                    </div>
                    <hr>
                </form>

              

                
                
			</section>

            
			<!-- end Service section -->
			
            
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>FOLLOW US</h2>
								<p>Beautifully simple follow buttons to help you get followers on</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>							
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="../js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="../js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="../js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="../http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="../js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="../js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="../js/jquery.slitslider.js"></script>
        <script src="../js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="../js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="../js/main.js"></script>
    </body>
</html>