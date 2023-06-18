<?php include_once "v_header.php"?>
            <?= $idVoucher ?>
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
                                    <div class="contact-text">
                                        <h2><?= $data->nama_game ?></h2>
                                        
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <div class="contact-text">
                                        <h2><?= $data->foto_game ?></h2>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <div class="contact-text">
                                        <p style="text-align: justify;">Dapatkan <?= $data->nama_game ?> hanya dalam beberapa detik! Pilih jumlah yang di inginkan, pilih metode pembayaran yang paling disukai, dan dapatkan kode voucher dalam hitungan detik. <br><br>

Bayar pakai Codacash, Alfamart, Bank Transfer, Dana, DOKU, GoPay, Indomaret, Kredivo, LinkAja, OVO, QRIS, ShopeePay, dan kartu kredit. Tanpa registrasi ataupun log-in!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="php/contact_action.php" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                    <div class="container">
                                        <div class="section-header text-center">
                                            <p>Games</p>
                                            <h2>Pilih Voucher</h2>
                                        </div>
                                        <form>
                                        <div class="row">
                                            <?php foreach ($voucher as $vc) : ?>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                                
                                                
                                                <button type="submit" name="submit" value="<?=$vc->id_voucher?>"><?=$vc->nama_voucher ?></button>
                                                            
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                        </form>
                                    </div>
                                    
                                    <!-- <div class="control-group">
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
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
<?php include_once "v_footer.php"?>
