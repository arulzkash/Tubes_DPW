<?php include_once "v_header.php"?>

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
                        <!-- <p>Daftar <span>Menu</span></p> -->
                        <a href="<?= site_url('c_voucher/linkCreateGame')?>" class="btn btn-success">
                          + Tambah Data
                          </a>
                      </div>
                    </div>
                    <div class="section-header">
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
                <td><a href="<?= site_url('c_voucher/linkEditGame/' . $show->id_game) ?>" class="link-warning"><i class="bi bi-pencil-square">Edit</i></a>
                &nbsp;
                <a href="<?= site_url('c_voucher/delete/' . $show->id_game) ?>" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3">Delete</i></a></td>
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

            <!-- Blog Start -->
            <div class="blog"id="contact">
                <div class="container" >
                    <div class="section-header text-center">
                        <p>Voucher</p>
                        <!-- <h2>Latest From Our Responders</h2> -->
                        <!-- <p>Daftar <span>Menu</span></p> -->
                        <a href="<?= site_url('c_voucher/linkCreateVoucher')?>" class="btn btn-success">
                          + Tambah Data
                          </a>
                      </div>
                    </div>
                    <div class="section-header">
        <main id="main">
    <section class="inner-page">    
    <div class="container table-responsive">
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
                    <td><a href="<?= site_url('c_voucher/linkEditVoucher/' . $show->id_voucher) ?>" class="link-warning"><i class="bi bi-pencil-square">Edit</i></a>
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

</main><!-- End #main -->
            </div>
            </div>
            <!-- Blog End -->

            <!-- Blog Start -->
            <div class="blog"id="contact">
                <div class="container" >
                    <div class="section-header text-center">
                        <p>Pembayaran</p>
                        <a href="<?= site_url('c_voucher/linkCreate')?>" class="btn btn-success">
                          + Tambah Data
                          </a>
                      </div>
                    </div>
                    <div class="section-header">
                    <main id="main">
                <section class="inner-page">    
                <div class="container table-responsive">
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
            <!-- End #main -->
            </div>
            </div>
            <!-- Blog End -->

<?php include_once "v_footer.php"?>