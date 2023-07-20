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

function prodi_satu($id_prodi,$isi_tabel)
{
    $x = mysqli_fetch_assoc(
        q("SELECT * FROM prodi WHERE id = '$id_prodi'")
    );
    return $x[$isi_tabel];
}