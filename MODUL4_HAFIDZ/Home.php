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
<?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'berhasil') { unset($_SESSION['login'])?>
    <div class="alert alert-warning alert-dismissible" role="alert">Anda berhasil login!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }?>
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
    <div class="row mx-auto w-75 p-3 mt-2">
        <div class="col-6 text-justify">
            <h1><b>Selamat Datang Di Show Room <?php if (isset($_SESSION['nama'])){ echo $_SESSION['nama'];} ?></b></h1>
            <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus</p>
            <?php
                $connect=mysqli_connect("localhost", "root", "", "modul3");
                $query=mysqli_query($connect, "SELECT * FROM showroom_hafidz_table");
                if (mysqli_num_rows($query)==0){
                    echo '<a class="btn btn-primary" href="../MODUL4_HAFIDZ/AddItem.php">MyCar</a>';
                }else{
                    echo '<a class="btn btn-primary" href="../MODUL4_HAFIDZ/MyItem.php">MyCar</a>';
                }
            ?>
        </div>
        <div class="col">
            <img width="350" height="250" src="https://www.toyota.astra.co.id/sites/default/files/2020-10/1_innova-super-white-2_0.png"></img>
        </div>
    <div class="row">
        <div class="col-6">
            <img src="../foto/logo-ead.png" style="width:100px;height:30px;float:left"></img>
            <p>Hafidz_1202204293</p>
        </div>
    </div>
</body>
</html>