<?php
    session_start();
    if($_POST['password']!=$_POST['repassword']){
        echo "<script>alert('Kata sandi tidak cocok')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../MODUL4_HAFIDZ/Register.php'>";
    }else{
        $username=$_POST['nama'];
        $email=$_POST['email'];
        $no_hp=$_POST['no_hp'];
        $password=$_POST['password'];
        $connect=mysqli_connect("localhost", "root", "", "wad_modul4");
        $check=mysqli_query($connect, "SELECT email FROM users_hafidz WHERE email='$email'");
        if(mysqli_num_rows($check)>0){
            $row=mysqli_fetch_assoc($check);
            $email_cek=$row['email'];
            if($email==$email_cek){
                $_SESSION['register'] = 'gagal';
                header("location:../MODUL4_HAFIDZ/Register.php");
            }
        }else{
            $tambah=mysqli_query($connect, "INSERT users_hafidz (nama, email, no_hp, password) VALUES ('$username', '$email', '$no_hp', '$password')");
            if($tambah){
                $_SESSION['register'] = 'berhasil';
                header("location:../MODUL4_HAFIDZ/Login.php");
            }else{
                header("location:../MODUL4_HAFIDZ/Register.php");
            }
        }
    }
?>
