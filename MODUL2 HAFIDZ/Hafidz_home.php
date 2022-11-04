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
        <div class="d-flex justify-content-center container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="Hafidz_home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="Hafidz_booking.php">Booking</a></li>
            </ul>
        </div>
    </nav>
    <center>
        <h3><b>WELCOME TO EAD RENT</b></h3>
        <p>Find your best deal, here!<p>
    </center>
    <div class="card-footer">
        <h3 align="center"><b>Jenis Mobil</b></h3>
        <center>
        <table>
            <tr>
                <td>
                    <div class="card">
                        <center>
                            <img width="350" height="250" src="https://www.toyota.astra.co.id/sites/default/files/2020-10/1_innova-super-white-2_0.png"></img>
                            <h4><b>Toyota Innova</b></h4>
                            <p>mulai dari Rp. 200.000/hari</p>
                            <p><b>7 kursi</b></p>
                            <p><b>1998 cc</b></p>
                            <p><b>Automatic</b></p>
                            <a class="btn btn-primary" href="Hafidz_booking.php?mobil=<?php echo 'toyota' ?>">Book now!</a>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="card">
                        <center>
                            <img width="350" height="250" src="https://static.rajamobil.com/resize/600x600/media/images/databasemobil/mobilbaru/color/jazz-rallye-red-.png"></img>
                            <h4><b>Honda Jazz</b></h4>
                            <p>mulai dari Rp. 100.000/hari</p>
                            <p><b>5 kursi</b></p>
                            <p><b>1497 cc</b></p>
                            <p><b>Automatic</b></p>
                            <a class="btn btn-primary" href="Hafidz_booking.php?mobil=<?php echo 'honda' ?>">Book now!</a>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="card">
                        <center>
                            <img width="350" height="250" src="https://assets.mitsubishi-motors.co.id/products/colors/1642040743-cross-black-at-2x-minpng.png"></img>
                            <h4><b>Mitsubishi Xpander Cross</b></h4>
                            <p>mulai dari Rp. 250.000/hari</p>
                            <p><b>7 kursi</b></p>
                            <p><b>1499 cc</b></p>
                            <p><b>Automatic</b></p>
                            <a class="btn btn-primary" href="Hafidz_booking.php?mobil=<?php echo 'mitsubishi' ?>">Book now!</a>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
        </center>
    </div>
</body>
<footer>
    <center>
        <p>Created by MUHAMMAD HAFIDZ ALKHAIR PASARIBU_1202204293
    </center>
</footer>
</html>