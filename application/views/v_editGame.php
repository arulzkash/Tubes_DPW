<?php include_once "v_header.php"?>

            <!-- Looking to join a team of talented individuals and work on exciting projects? Look no further! We're actively seeking passionate and driven individuals to join our dynamic team. Come be a part of our mission to innovate and make a difference in the world. Apply now and let's build the future together! -->

        <form action="<?= site_url('c_voucher/editConfirmGame')?>" method="POST" id="registrationForm" enctype="multipart/form-data">
        <input class="form-control" type="hidden" name="id" value="<?= $id?>">
        <br />
        <label for="user_type" class="form-label">Nama Game</label>
        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?= $nama?>" required> <br>
        <br />
        <label class="form-label" for="Foto Game">Foto</label><br>
        <img src="<?=base_url('asset/img/'.$foto)?>" alt="">
        <input class="form-control" type="file" name="foto" id="foto" accept="image/*">
        <br />
            <br>
            <div>
                <button class="btn" type="submit" id="submit">Simpan</button>
            </div>
            <br>
        </form>
            

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
            <?php include_once "v_footer.php"?>
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
