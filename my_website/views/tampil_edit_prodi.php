<?php 
require "../controllers/functions.php"; 
$id_prodi = $_POST["id_prodi"];
?>

<div class="col-sm-10">
        <label for="">Nama Prodi</label>
        <input type="text" name="" id="nama_prodi" class="form-control" value="<?= prodi_satu($id_prodi,"nama_prodi") ?>">
        <!-- ini adalah peringatan jika input nama prodinya kosong -->
        <p class="peringatan"></p>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-sm btn-success mt-4" id="simpan_prodi">Edit Prodi</button>
    </div>