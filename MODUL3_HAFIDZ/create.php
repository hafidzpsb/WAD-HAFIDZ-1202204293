<?php
    $connect=mysqli_connect("localhost", "root", "", "modul3");
    $Nama_Mobil=$_POST['Nama_Mobil'];
    $Nama_Pemilik=$_POST['Nama_Pemilik'];
    $Merk=$_POST['Merk'];
    $Tanggal_Beli=$_POST['Tanggal_Beli'];
    $Deskripsi=$_POST['Deskripsi'];
    $Foto=$_FILES['Foto']['name'];
    $Foto_Tmp=$_FILES['Foto']['tmp_name'];
    move_uploaded_file($Foto_Tmp, 'MODUL3_HAFIDZ/foto/'.$Foto);
    $Status_Pembayaran=$_POST['Status_Pembayaran'];
    $query=mysqli_query($connect, "INSERT INTO showroom_hafidz_table(id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('','$Nama_Mobil','$Nama_Pemilik','$Merk','$Tanggal_Beli','$Deskripsi','$Foto','$Status_Pembayaran')");
    if($query){
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=/MODUL3_HAFIDZ/AddItem.php'>";
    }else{
        echo "<script>alert('Data gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=/MODUL3_HAFIDZ/AddItem.php'>";
    }
?>