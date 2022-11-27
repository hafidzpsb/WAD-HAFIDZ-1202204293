<?php
    session_start();
    $warna_navbar="";
    if (isset($_COOKIE['warna_navbar'])){
        $warna_navbar=$_COOKIE['warna_navbar'];
    }
?>
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
<style type="text/css">
    .navbar{
            background-color: <?= $warna_navbar ?>;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="d-flex justify-content-left container-fluid">
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['LOGIN'])){ ?>
                    <li class="nav-item"><a class="nav-link" href="../MODUL4_HAFIDZ/Home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../MODUL4_HAFIDZ/MyItem.php">MyCar</a></li>
                    <li class="nav-item"><a class="nav-link" href="../MODUL4_HAFIDZ/AddItem.php">AddCar</a></li>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['nama']?></button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../MODUL4_HAFIDZ/Profile.php?uid=<?php echo $_SESSION['uid']?>">Profile</a></li>
                            <li><a class="dropdown-item" href="../MODUL4_HAFIDZ/Logout.php">Log out</a></li>
                        </ul>
                    </div>
                <?php }else{ ?>
                    <li class="nav-item"><a class="nav-link" href="../MODUL4_HAFIDZ/Home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../MODUL4_HAFIDZ/Login.php">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <h3><b>Tambah Mobil</b></h3>
    <p>Tambah Mobil Baru Anda Ke List Showroom</p>
    <div class="col">
        <form action="../MODUL4_HAFIDZ/create.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Nama_Mobil"><b>Nama Mobil</b></label>
                <input type="text" name="Nama_Mobil" class="form-control form-control-readonly" value="">
            </div>
            <div class="mb-3">
                <label for="Nama_Pemilik"><b>Nama Pemilik</b></label>
                <input type="text" name="Nama_Pemilik"" class="form-control" placeholder="Nama - NIM" value="">
            </div>
            <div class="mb-3">
                <label for="Merk"><b>Merk</b></label>
                <input type="text" name ="Merk" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="Tanggal_Beli"><b>Tanggal Beli</b></label>
                <input type="date" name="Tanggal_Beli" class="form-control" placeholder="mm/dd/yyyy">
            </div>
            <div class="mb-3">
                <label for="Deskripsi"><b>Deskripsi</b></label>
                <textarea class="form-control" rows="3" name="Deskripsi"></textarea>
            </div>
            <div class="mb-3">
                <label for="Foto"><b>Foto</b></label>
                <input type="file" name="Foto" id="Foto" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
                <label for="Status_Pembayaran"><b>Status Pembayaran</b></label>
                <div class="mb-3">
                    <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Lunas">
                    <label for="Lunas">Lunas</label>
                    <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Belum Lunas">
                    <label for="Belum Lunas">Belum Lunas</label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <input class="btn btn-primary" type="submit" name="Selesai" value="Selesai">                   
            </div>
        </form>
    </div>
</body>
</html>