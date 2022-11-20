<!DOCTYPE html>
<html lang="eng">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="d-flex justify-content-left container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/MODUL3_HAFIDZ/Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/MODUL3_HAFIDZ/MyItem.php">MyCar</a></li>
            </ul>
        </div>
    </nav>
    <?php
        $connect=mysqli_connect("localhost", "root", "", "modul3");
        $id=$_GET['id'];
        $query=mysqli_query($connect, "SELECT * FROM showroom_hafidz_table WHERE id_mobil=$id");
        $selects=mysqli_fetch_array($query);
    ?>
    <h1><b><?php echo $selects['nama_mobil'] ?></b></h1>
    <p>Detail Mobil <?php echo $selects['nama_mobil'] ?></p>
    <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
        <img src="MODUL3_HAFIDZ/foto/<?php echo $selects['foto_mobil']?>" alt="No Image"></img>
        <form enctype='multipart/form-data'>
            <div class="mb-3">
                <label for="Nama_Mobil"><b>Nama Mobil</b></label>
                <input type="text" name="Nama_Mobil" class="form-control form-control-readonly" value="<?php echo $selects['nama_mobil']?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Nama_Pemilik"><b>Nama Pemilik</b></label>
                <input type="text" name="Nama_Pemilik"" class="form-control"value="<?php echo $selects['pemilik_mobil']?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Merk"><b>Merk</b></label>
                <input type="text" name ="Merk" class="form-control" value="<?php echo $selects['merk_mobil']?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Tanggal_Beli"><b>Tanggal Beli</b></label>
                <input type="date" name="Tanggal_Beli" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo $selects['tanggal_beli']?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Deskripsi"><b>Deskripsi</b></label>
                <textarea class="form-control" rows="3" name="Deskripsi" readonly><?php echo $selects['deskripsi']?></textarea>
            </div>
            <div class="mb-3">
                <label for="Foto"><b>Foto</b></label>
                <input type="file" name="Foto" id="Foto" class="form-control" value="" readonly><span><?php echo $selects['foto_mobil']?></span>
            </div>
            <div class="mb-3">
                <label for="Status_Pembayaran"><b>Status Pembayaran</b></label>
                <div class="mb-3">
                    <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Lunas" <?php ($selects["status_pembayaran"] == 'Yes') ? "checked" : ""?>" readonly>
                    <label for="Lunas">Lunas</label>
                    <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Belum Lunas" <?php ($selects["status_pembayaran"] == 'No') ? "checked" : ""?>" readonly>
                    <label for="Belum Lunas">Belum Lunas</label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <a href='/MODUL3_HAFIDZ/EditItem.php?id=<?php echo $selects['id_mobil']?>' button class='btn btn-primary' type='Edit'>Edit</button>                
            </div>
        </form>
    </div>