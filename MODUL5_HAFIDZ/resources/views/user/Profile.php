@extends('navbar')
@section('isihalaman')
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
    <?php
        $connect=mysqli_connect("localhost", "root", "", "wad_modul4");
        $uid=$_GET['uid'];
        $query=mysqli_query($connect, "SELECT * FROM users_hafidz WHERE id=$uid");
        $selects=mysqli_fetch_array($query);
    ?>
    <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
        <div class="col-md-3">
            <div class="card">
                <form action="../MODUL4_HAFIDZ/PostProfile.php?uid=<?php echo $_SESSION['uid']?>" method="POST">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Profile</h5>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label" for="email" value><b>Email</b></label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $selects['email']?>" readonly>
                        </div>
                        <div class="mb-3">
                        <label for="nama"><b>Nama</b></label>
                            <label class="form-label" for="nama"><b>Nama</b></label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $selects['nama']?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="no_hp"><b>Nomor Handphone</b></label>
                            <input type="number" class="form-control" name="no_hp" id="no_hp" value="<?php echo $selects['no_hp']?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password"><b>Kata Sandi</b></label>
                            <input type="password" class="form-control" name="password" id="password" value="<?php echo $selects['password']?>" onkeyup="check()">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="repassword"><b>Konfirmasi Kata Sandi</b></label>
                            <input type="password" class="form-control" name="repassword" id="repassword" value="<?php echo $selects['password']?>" onkeyup="check()">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="warna_navbar"><b>Warna Navbar</b></label>
                            <select class="form-control" name="warna_navbar" id="warna_navbar">
                                <?php
                                    $colors=array('#4e79a0'=>'Biru', '#75b14a'=>'Hijau', '#d06353'=>'Merah');
                                    foreach ($colors as $name=>$value){
                                        $selected=$name== @$_POST['warna_navbar'] ? 'SELECTED="SELECTED"' : '';
                                        echo '<option value="'.$name.'"'.$selected.'"'  .'>'.$value.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <span id='cek' style="color: red;"></span>
                        <div class="row mt-1 mb-2">
                            <div class="col-sm-3 col-md-3"></div>
                            <div class="col-sm-3 col-md-4">
                                <input class="ps-5 pe-5 btn btn-primary" type="submit" value="Update">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
<script>
    function check(){
        let x=document.getElementById("password");
        let y=document.getElementById("repassword");
        let z=document.getElementById("cek");
        if (x.value!=y.value){
            z.innerHTML = "Kata sandi tidak cocok";
        }else{
            z.innerHTML = "";
        }
    }
</script>