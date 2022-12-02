<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_POST['remember'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    setCookie("Email", $email, time()+3600);
    setCookie("Password", $password, time()+3600);
}
$connect=mysqli_connect("localhost", "root", "", "wad_modul4");
$email=$_POST['email'];
$password=$_POST['password'];
$dt_username="users_hafidz WHERE email='$email'";
$executeQuery=mysqli_query($connect, $dt_username);
if(mysqli_num_rows($executeQuery)>0){
    $result=mysqli_fetch_assoc($executeQuery);
    $result_check=$result['password'];
    if($password==$result_check){
        $_SESSION['LOGIN']=TRUE;
        $_SESSION['nama']=$result['nama'];
        $_SESSION['uid']=$result['id'];
        $_SESSION['login']='berhasil';
        header('location:../MODUL4_HAFIDZ/Home.php');
        exit();
    }else{
        $_SESSION['message']='Password anda salah, silahkan coba lagi!';
        header('location:../MODUL4_HAFIDZ/Login.php');
        exit();
    }
}
$_SESSION['message']='Gagal Login';
header('location:../MODUL4_HAFIDZ/Login.php');
exit();
?>
