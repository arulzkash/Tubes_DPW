<?php
//create connection
$conn = mysqli_connect("localhost","root","","db_utsdpw");

//get var form user input
$name= $_POST['nama_contact'];
$email= $_POST['email_contact'];
$subject= $_POST['subject_contact'];
$message = $_POST['message_contact'];
// $id = $_POST['id_contact'];

//check or validate
if (!empty($name)) {

    //create sql command
    $sql = "insert into t_contact (nama_contact,email_contact,subject_contact,message_contact) values
    ('$name','$email','$subject','$message')";
    
    //get result
    $result = mysqli_query($conn,$sql);
    
    //if success
    if ($result) {
        //do nothing

    //if not success
    } else {
        //send error
        echo mysqli_error($conn);
        exit();   
    }
}

//back to employee
header("location:../index.php");

?>