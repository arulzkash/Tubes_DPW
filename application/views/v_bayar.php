<?php include_once "v_header.php"?>
<!-- Contact Start -->
<div class="contact wow fadeInUp" id="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Form Pembelian</p>
            <h2>Voucher <?= $data->nama_game ?></h2>
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
                        <img src="<?=base_url('asset/img/'.$data->foto_game)?>" style="display: block;border-radius: 5%;border-color:white;margin-right:30px; width:300px;" border="2px" >
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
                    
                    
                    <div class="container">
                        <form name="myForm" action="<?php echo site_url('C_Voucher/bayar'); ?>" onsubmit="return validateForm()" method="post" >
                            <h4>Masukkan Nama</h4>
                                <input class="form-control" type="text" id="namauser" name="namauser" placeholder="nama..">
                                <p class="help-block text-danger"></p>
                                <h4>Pilih Voucher</h4>
                                <!-- <div class="form-control"> -->
                                    <select name="voucherbayar">
                                        <?php foreach ($voucher as $v) : ?>
                                            <option value="<?=$v->id_voucher?>"><?=$v->nama_voucher ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    <!-- </div> -->
                                    <p class="help-block text-danger"></p>
                                    <h4>Pilih Metode Pembayaran</h4>
                                    <select name="vouchermetod">
                                        <?php foreach ($ko as $i) : ?>
                                            <option value="<?=$i->id_pembayaran?>"><?=$i->nama_pembayaran ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="help-block text-danger"></p>
                                        <h4>Masukkan Jumlah Uang Anda</h4>
                                        <input class="form-control" type="number" id="uanguser" name="uanguser" placeholder="nominal..">
                                        <p class="help-block text-danger"></p>
                                        <div>
                            <button class="btn" type="submit" id="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?php include_once "v_footer.php"?>