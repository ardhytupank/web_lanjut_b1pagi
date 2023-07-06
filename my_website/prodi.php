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

<script>
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