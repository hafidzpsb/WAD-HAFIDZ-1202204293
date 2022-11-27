<?php
    session_start();
    unset($_SESSION['LOGIN']);
    header("location:../MODUL4_HAFIDZ/Home.php")
?>