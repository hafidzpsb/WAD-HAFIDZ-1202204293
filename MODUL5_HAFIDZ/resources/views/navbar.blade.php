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
<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'gagal') { unset($_SESSION['register']);?>
    <div class="alert alert-warning alert-dismissible" role="alert">Email Anda sudah pernah terdaftar!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'berhasil') { unset($_SESSION['login'])?>
    <div class="alert alert-warning alert-dismissible" role="alert">Anda berhasil login!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }?>
<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'berhasil') { unset($_SESSION['register']);?>
    <div class="alert alert-warning alert-dismissable" role="alert">Anda berhasil register!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }?>
<?php if (isset($_SESSION['message'])) { $pesan=$_SESSION['message']; ?>
    <div class="alert alert-warning alert-dismissable" role="alert"><?php echo "$pesan" ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php unset($_SESSION['message']);}?>
<?php if (isset($_SESSION['profile'])) { unset($_SESSION['profile'])?>
    <div class="alert alert-warning alert-dismissible" role="alert">Profile berhasil diubah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> 
<?php } ?>
<style type="text/css">
    .navbar{
            background-color: <?= $warna_navbar ?>;
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="d-flex justify-content-left container-fluid">
                <ul class="navbar-nav">
                    <?php if(isset($_SESSION['LOGIN'])){ ?>
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/showroom">MyCar</a></li>
                        <li class="nav-item"><a class="nav-link" href="/showroom/create">AddCar</a></li>
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['nama']?></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/showroom/Profile">Profile</a></li>
                                <li><a class="dropdown-item" href="/">Log out</a></li>
                            </ul>
                        </div>
                    <?php }else{ ?>
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login/create">Login</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('isihalaman')
    </main>
</body>
</html>