<?php
    $connect=mysqli_connect("localhost", "root", "", "modul3");
    $Id=$_GET['id'];
    $Nama_Mobil=$_POST['Nama_Mobil'];
    $Nama_Pemilik=$_POST['Nama_Pemilik'];
    $Merk=$_POST['Merk'];
    $Tanggal_Beli=$_POST['Tanggal_Beli'];
    $Deskripsi=$_POST['Deskripsi'];
    $Foto=$_FILES['Foto']['name'];
    $Foto_Tmp=$_FILES['Foto']['tmp_name'];
    move_uploaded_file($Foto_Tmp, 'foto/'.$Foto);
    $Status_Pembayaran=$_POST['Status_Pembayaran'];
    $query=mysqli_query($connect, "UPDATE showroom_hafidz_table SET nama_mobil='$Nama_Mobil', pemilik_mobil='$Nama_Pemilik', merk_mobil='$Merk', tanggal_beli='$Tanggal_Beli', deskripsi='$Deskripsi', foto_mobil='$Foto', status_pembayaran='$Status_Pembayaran' WHERE id_mobil='$Id'");
    if($query){
        header ("Location:../MODUL4_HAFIDZ/MyItem.php");
    }
?>