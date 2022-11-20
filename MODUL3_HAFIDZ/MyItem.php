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
        <div class="d-flex justify-content-left container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/MODUL3_HAFIDZ/Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/MODUL3_HAFIDZ/MyItem.php">MyCar</a></li>
            </ul>
        </div>
    </nav>
    <h1><b>My Show Room</b></h1>
    <p>List Show Room Hafidz - 1202204293</p>
    <?php
        $connect=mysqli_connect("localhost", "root", "", "modul3");
        $query=mysqli_query($connect, "SELECT * FROM showroom_hafidz_table");
        foreach ($query as $tampil):?>
            <div class='row row-cols-1 row-cols-md-2 g-4'>
                <div class='col'>
                    <div class='card'>
                        <img class='card-img-top' width='250' height='350' src='foto/<?php echo $tampil['foto_mobil']?>' alt='No Image'></img>
                        <div class='card-body'>
                            <h5 class='card-title'><center><b><?php echo $tampil['nama_mobil']?></b></center></h5>
                            <p class='card-text'><?php echo substr($tampil['deskripsi'], 0, 50)?>...</p>
                        </div>
                        <div class='card-footer'>
                            <a href='/MODUL3_HAFIDZ/ItemDetail.php?id=<?php echo $tampil['id_mobil']?>' button class='btn btn-primary' id='Details'>Detail</a>
                            <a href='/MODUL3_HAFIDZ/delete.php?id=<?php echo $tampil['id_mobil']?>' button class='btn btn-danger' id='Delete'>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="Deletetoast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Alert</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Data telah dihapus
            </div>
        </div>
    </div>
    <script>
        const toastTrigger = document.getElementById('Delete')
        const toastLiveExample = document.getElementById('Deletetoast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)
                toast.show()
            })
        }
</script>

<footer>
    <div>
        <p>Jumlah Mobil: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</footer>


