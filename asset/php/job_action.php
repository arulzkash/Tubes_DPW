<?php
//create connection
$conn = mysqli_connect("localhost","root","","db_utsdpw");

if (isset($_POST['SubmitButton'])) {
  
    //get var form user input
  $name= $_POST['nama_emp'];
  $age= $_POST['umur_emp'];
  $address= $_POST['alamat_emp'];
  $phone= $_POST['phone_emp'];
  $email= $_POST['email_emp'];
  $gender= $_POST['id_gender'];
  $education= $_POST['id_pendidikan'];
  $job= $_POST['id_job'];
  $photo= $_FILES['file_photo']['name'];
  $cv= $_FILES['file_cv']['name'];

  $dirPhoto = "/files/photo/";
  $tmpPhoto = $_FILES['file_photo']['tmp_name'];
  $terupload = move_uploaded_file($tmpPhoto, $dirPhoto.$photo);

  $dirCV = "/files/cv/";
  $tmpCV = $_FILES['file_cv']['tmp_name'];
  move_uploaded_file($tmpCV, $dirCV.$cv);

  $sql = "INSERT INTO t_emp (nama_emp, umur_emp, alamat_emp, phone_emp, email_emp, file_photo, file_cv , id_gender, id_pendidikan, id_job) VALUES
  ('$name','$age','$address','$phone', '$email', '$photo', '$cv', '$gender', '$education', '$job')";
  
    $result = mysqli_query($conn,$sql);
  
    if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
}
    //back to employee
header("location:../index.php");

?>