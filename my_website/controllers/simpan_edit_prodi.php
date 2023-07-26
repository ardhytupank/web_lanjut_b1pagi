<?php
require "functions.php";

// var_dump($_POST);
$nama_prodi = $_POST["nama_prodi"];
$id_prodi = $_POST["id_prodi"];

$tanggal = date("Y-m-d H:i:s");

$simpan_edit_prodi = q("UPDATE prodi SET
nama_prodi = '$nama_prodi',
updated = '$tanggal'
WHERE
id = '$id_prodi'");

if ($simpan_edit_prodi) {
    echo "berhasil";
}else {
    echo "gagal";
}