<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi(){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "web_lanjut_b1";
    return mysqli_connect(
        $server,
        $username,
        $password,
        $database
    );
}

function q($data){
    return mysqli_query(koneksi(), $data);
}

function prodi(){
    return q("SELECT * FROM prodi");
}