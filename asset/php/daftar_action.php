<?php

    include ('koneksi.php');

    if (isset($_POST['CancelSubmit'])) {

    } elseif (isset($_POST['CreateSubmit'])) {
    
        $name= $_POST['nama_pendaftar'];
        $age= $_POST['umur_pendaftar'];
        $phone= $_POST['telpon_pendaftar'];
        $address= $_POST['alamat_pendaftar'];
        $email= $_POST['email_pendaftar'];
        $education= $_POST['id_pendidikan'];
        $photo= $_FILES['foto_pendaftar']['name'];
        $cv= $_FILES['cv_pendaftar']['name'];
        $job= $_POST['id_pekerjaan'];

        $dirPhoto = "../files/foto/";
        $tmpPhoto = $_FILES['foto_pendaftar']['tmp_name'];
        $terupload = move_uploaded_file($tmpPhoto, $dirPhoto.$photo);

        $dirCV = "../files/cv/";
        $tmpCV = $_FILES['cv_pendaftar']['tmp_name'];
        move_uploaded_file($tmpCV, $dirCV.$cv);
    
        $sql = "INSERT INTO t_pendaftar (nama_pendaftar, umur_pendaftar, telpon_pendaftar, alamat_pendaftar, email_pendaftar, id_pendidikan, foto_pendaftar, cv_pendaftar, id_pekerjaan) VALUES
        ('$name','$age','$phone','$address', '$email', '$education', '$photo', '$cv', '$job')";
            
        $result = mysqli_query($conn,$sql);

        // if($terupload){
        //     echo "Berhasil";
        // }else{
        //     echo "Gagal";
        // }
            
        if ($result) {
          echo "<script type='text/javascript'>alert('Success Submit !');</script>";
        } else {
          echo mysqli_error($conn);
          exit();   
        }
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";
    }

    header("location:daftar.php");
?>