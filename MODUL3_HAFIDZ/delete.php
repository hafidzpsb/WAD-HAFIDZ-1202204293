<?php
    $connect=mysqli_connect("localhost", "root", "", "modul3");
    $Id=$_GET['id'];
    $hapus="DELETE FROM showroom_hafidz_table WHERE id_mobil = $Id";
    if(mysqli_query($connect,$hapus)){
        header("Location: /MODUL3_HAFIDZ/MyItem.php");
    }
?>