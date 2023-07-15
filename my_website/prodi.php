<?php require "controllers/functions.php"; ?>

<h2>Ini adalah Halaman Program Studi</h2>

<div class="row">
    <div class="col-sm-10">
        <label for="">Nama Prodi</label>
        <input type="text" name="" id="nama_prodi" class="form-control">
        <!-- ini adalah peringatan jika input nama prodinya kosong -->
        <p class="peringatan"></p>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-sm btn-info mt-4" id="simpan_prodi">Simpan</button>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-primary table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Prodi</th>
                <th>Nama Prodi</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach(prodi() as $p) :
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $p["id"] ?></td>
                <td><?= $p["nama_prodi"] ?></td>
                <td><?= $p["created"] ?></td>
                <td><?= $p["updated"] ?></td>
                <td>
                    <button class="btn btn-success btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm hapus-prodi" atrr_id_prodi="<?= $p["id"] ?>">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(".hapus_prodi").click(function(){
        
    })

    $("#simpan_prodi").click(function(){
        //ini adalah variabel yang value nya diambil dari id nama_prodi
        var nama_prodi = $("#nama_prodi").val()
        if (nama_prodi == "") {
            $(".peringatan").text("Nama prodi masih kosong!")
        }else{
            $(".peringatan").text("")
            $.ajax({
                type: "POST",
                url: "controllers/simpan_prodi.php",
                data: "nama_prodi="+nama_prodi,
                success: function(data){
                    if (data == "gagal") {
                        alert("Data gagal ditambahkan!")
                    }else if (data == "berhasil") {
                        alert("Data berhasil ditambahkan")
                        $("#halaman_body").load("prodi.php")
                    }
                }
            })
        }
    })
</script>