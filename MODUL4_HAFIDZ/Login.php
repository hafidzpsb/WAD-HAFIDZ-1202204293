<?php
    session_start();
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
<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'berhasil') { unset($_SESSION['register']);?>
    <div class="alert alert-warning alert-dismissable" role="alert">Anda berhasil register!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }elseif (isset($_SESSION['message'])) { $pesan=$_SESSION['message']; ?>
    <div class="alert alert-warning alert-dismissable" role="alert"><?php echo "$pesan" ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php unset($_SESSION['message']);}?>
<body>
    <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
        <div class="col-md-3">
            <div class="card">
                <form action="../MODUL4_HAFIDZ/PostLogin.php" method="POST">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Login</h5>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label" for="email"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Alamat E-Mail" value="<?php if (isset($_COOKIE['Email'])){ echo $_COOKIE['Email']; }?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password"><b>Kata Sandi</b></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi Anda" value="<?php if (isset($_COOKIE['Password'])){ echo $_COOKIE['Password']; }?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <div class="row mt-1 mb-2">
                            <div class="col-sm-3 col-md-3"></div>
                            <div class="col-sm-3 col-md-4">
                                <input class="ps-5 pe-5 btn btn-primary" type="submit" value="Login">
                            </div>
                        </div>
                </form>
            </div>
            <h6 class="mb-4" style="text-align: center;">Anda belum punya akun? <a href="../MODUL4_HAFIDZ/Register.php">Daftar</a></h6>
        </div>
    </div>
</body>