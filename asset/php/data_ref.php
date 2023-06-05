<?php

function f_gender(){
    $conn = mysqli_connect("localhost","root","","db_utsdpw");
    $sql = "SELECT * from t_gender order by id_gender ASC";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}
function f_pendidikan(){
    $conn = mysqli_connect("localhost","root","","db_utsdpw");
    $sql = "SELECT * from t_pendidikan order by id_pendidikan ASC";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}
function f_job(){
    $conn = mysqli_connect("localhost","root","","db_utsdpw");
    $sql = "SELECT * from t_job order by id_job ASC";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}

function f_all_emp(){
    //buat koneksi
    $conn = mysqli_connect("localhost","root","","db_utsdpw");
 
    //buat string sql
    $sql = "SELECT *
            FROM
            t_emp
            INNER JOIN t_gender ON t_emp.id_gender = t_gender.id_gender
            INNER JOIN t_pendidikan ON t_emp.id_pendidikan = t_pendidikan.id_pendidikan
            INNER JOIN t_job ON t_emp.id_job = t_job.id_job
            ORDER BY
            t_emp.id_emp ASC
            ";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}

function f_all_message(){
    //buat koneksi
    $conn = mysqli_connect("localhost","root","","db_utsdpw");
 
    //buat string sql
    $sql = "SELECT * FROM t_contact ORDER BY t_contact.id_contact ASC";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;

}
?>