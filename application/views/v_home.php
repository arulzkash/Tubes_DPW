<?php include_once "v_header.php"?>
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('asset/img/Screenshot_2.png') ?>" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">TOKO TOP UP</p>
                            <h1 class="animated fadeInLeft">TERPERCAYA SE-INDONESIA</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?= base_url('asset/img/new.gif') ?>" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">AMAN, CEPAT</p>
                            <h1 class="animated fadeInLeft">DAN HEMAT TENTUNYA</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/Screenshot_4.png" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">TOP UP SESERING MUNGKIN</p>
                            <h1 class="animated fadeInLeft">PAKAI SULTANTOPUP</h1>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->

            <!-- Blog Start -->
            <div class="blog" id="games">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Games</p>
                        <h2>Our Games</h2>
                    </div>
                    <div class="row">
					<?php 
					$count = 0;
					foreach ($data as $row){
						$count = $count + 1;
						?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div  class="blog-img card">
                                    <img  src="<?= base_url('asset/img/'.$row->foto_game ) ?>" style="min-height: 235px; max-height: 235px; width: 350px;" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3><a href="<?php echo site_url('C_Voucher/tampilBayar/'.$row->id_game);?>"><?=$row->nama_game ?></a></h3>
                                </div>
                            </div>
                        </div>
						<?php } ?>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

            <!-- Contact Start -->
            <div class="contact wow fadeInUp" id="contact">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Contact</p>
                        <h2>Get In Touch For Any Query</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>Jln. Soudirman, Jakarta, Indonesia</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+012 345 67890</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>ranz@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="php/contact_action.php" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="nama_contact" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" name="email_contact" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="subject_contact" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" name="message_contact" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
<?php include_once "v_footer.php"?>