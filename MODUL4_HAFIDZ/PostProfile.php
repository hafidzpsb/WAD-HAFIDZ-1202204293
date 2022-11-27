<?php
    session_start();
    $uid=$_GET['uid'];
    if ($_POST['warna_navbar']){
        $warna_navbar=$_POST['warna_navbar'];
        setcookie('warna_navbar', $_POST['warna_navbar']);
    }
    if($_POST['password']!=$_POST['repassword']){
        echo "<script>alert('Kata sandi tidak cocok')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../MODUL4_HAFIDZ/Profile.php?uid=".$_SESSION['uid'].">";
    }else{
        $username=$_POST['nama'];
        $no_hp=$_POST['no_hp'];
        $password=$_POST['password'];
        $connect=mysqli_connect("localhost", "root", "", "wad_modul4");
        $update=mysqli_query($connect, "UPDATE users_hafidz SET nama='$username', no_hp='$no_hp', password='$password' WHERE id=$uid");
        if($update){
            $_SESSION['profile'] = 'berhasil';
            header("location:../MODUL4_HAFIDZ/Profile.php?uid=".$_SESSION['uid']."");
        }
    }
?>