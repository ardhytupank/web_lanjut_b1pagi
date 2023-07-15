<?php
require "functions.php";

// var_dump($_POST);
$id_prodi = $_POST["id_prodi"];

$hapus = q("DELETE FROM prodi WHERE
id = '$id_prodi'");

if ($hapus) {
    echo "berhasil";
}else {
    echo "gagal";
}