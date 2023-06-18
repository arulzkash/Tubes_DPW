<?php include_once "v_header.php"?>
<form action="<?= site_url('c_voucher/editConfirmGame')?>" method="POST" id="registrationForm" enctype="multipart/form-data">
<input class="form-control" type="hidden" name="id" value="<?= $id?>">
<br />
<label for="user_type" class="form-label">Nama Game</label>
<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?= $nama?>" required> <br>
<br />
<label for="user_type" class="form-label">Harga</label>
<input class="form-control" type="text" name="harga" id="harga" placeholder="Harga" value="" required> <br>
<br />
<label for="id_game">Untuk Game</label>
<select name="id_game" id="id_game">
    <?php
    $count = 0;
    foreach($game as $i) {
        $count = $count + 1;
        ?>
    <option value="<?= $i->id_game?>"><?=$i->nama_game?></option>
<?php
}
?>
</select>
<br>
    <br>
    <div>
        <button class="btn" type="submit" id="submit">Simpan</button>
    </div>
    <br>
</form>
<?php include_once "v_footer.php"?>
