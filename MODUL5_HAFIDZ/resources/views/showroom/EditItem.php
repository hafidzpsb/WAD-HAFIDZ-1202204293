@extends('navbar')
@section('isihalaman')
    <h1><b>Edit</b></h1>
    <p>Edit Mobil <?php echo $selects['nama_mobil'] ?></p>
    <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
        <img src="../foto/<?php echo $selects['foto_mobil']?>" alt="No Image"></img>
        <form action="../MODUL4_HAFIDZ/update.php?id=<?php echo $selects['id_mobil']?>" method="POST" enctype='multipart/form-data'>
            <div class="mb-3">
                <label for="Nama_Mobil"><b>Nama Mobil</b></label>
                <input type="text" name="Nama_Mobil" class="form-control form-control-readonly" value="<?php echo $selects['nama_mobil']?>">
            </div>
            <div class="mb-3">
                <label for="Nama_Pemilik"><b>Nama Pemilik</b></label>
                <input type="text" name="Nama_Pemilik"" class="form-control"value="<?php echo $selects['pemilik_mobil']?>">
            </div>
            <div class="mb-3">
                <label for="Merk"><b>Merk</b></label>
                <input type="text" name ="Merk" class="form-control" value="<?php echo $selects['merk_mobil']?>">
            </div>
            <div class="mb-3">
                <label for="Tanggal_Beli"><b>Tanggal Beli</b></label>
                <input type="date" name="Tanggal_Beli" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo $selects['tanggal_beli']?>">
            </div>
            <div class="mb-3">
                <label for="Deskripsi"><b>Deskripsi</b></label>
                <textarea class="form-control" rows="3" name="Deskripsi"><?php echo $selects['deskripsi']?></textarea>
            </div>
            <div class="mb-3">
                <label for="Foto"><b>Foto</b></label>
                <input type="file" name="Foto" id="Foto" class="form-control" value=""><span><?php echo $selects['foto_mobil']?></span>
            </div>
            <div class="mb-3">
                <label for="Status_Pembayaran"><b>Status Pembayaran</b></label>
                <div class="mb-3">
                    <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Lunas" <?php ($selects["status_pembayaran"] == 'Yes') ? "checked" : ""?>">
                    <label for="Lunas">Lunas</label>
                    <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Belum Lunas" <?php ($selects["status_pembayaran"] == 'No') ? "checked" : ""?>">
                    <label for="Belum Lunas">Belum Lunas</label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <input class="btn btn-primary" type="submit" name="Simpan" value="Simpan">                   
            </div>
        </form>
    </div>