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
        <button class="btn btn-success mt-4" id="simpan_edit_prodi" attr_id_prodi="<?= $id_prodi; ?>">Edit Prodi</button>
    </div>

    <script>
        $("#simpan_edit_prodi").click(function(){
            var nama_prodi = $("#nama_prodi").val()
            var id_prodi = $(this).attr("attr_id_prodi")
            $.ajax({
                type: "POST",
                url: "controllers/simpan_edit_prodi.php",
                data: "nama_prodi="+nama_prodi+"&id_prodi="+id_prodi,
                success: function(data){
                    // console.log(data)
                    if (data == "gagal") {
                        alert("Edit GAGAL!")
                    }else if (data == "berhasil") {
                        alert("Edit Prodi Berhasil!")
                        $("#halaman_body").load("prodi.php")
                    }
                }
            })
        })
    </script>