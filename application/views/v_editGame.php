<?php include_once "v_header.php"?>

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
