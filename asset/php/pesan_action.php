<?php

    include ('koneksi.php');

    $name= $_POST['nama_pesan'];
    $email= $_POST['email_pesan'];
    $subject= $_POST['subjek_pesan'];
    $message= $_POST['isi_pesan'];
    
    $sql = "INSERT INTO t_pesan (nama_pesan, email_pesan, subjek_pesan, isi_pesan) VALUES
    ('$name','$email','$subject','$message')";
            
    $result = mysqli_query($conn,$sql);
        
    if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    
    header("location:../index.html");
?>