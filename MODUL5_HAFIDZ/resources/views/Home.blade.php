@extends('navbar')
@section('isihalaman')
    <div class="row mx-auto w-75 p-3 mt-2">
        <div class="col-6 text-justify">
            <h1><b>Selamat Datang Di Show Room <?php if (isset($_SESSION['nama'])){ echo $_SESSION['nama'];} ?></b></h1>
            <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus</p>
            <?php
                use App\Models\Showroom;
                $banyakshowroom = Showroom::all()->count();
                if ($banyakshowroom==0){
                    echo '<a class="btn btn-primary" href="/showroom/create">MyCar</a>';
                }else{
                    echo '<a class="btn btn-primary" href="/showroom">MyCar</a>';
                }
            ?>
        </div>
        <div class="col">
            <img width="350" height="250" src="https://www.toyota.astra.co.id/sites/default/files/2020-10/1_innova-super-white-2_0.png"></img>
        </div>
    <div class="row">
        <div class="col-6">
            <img src="/foto/logo-ead.png" style="width:100px;height:30px;float:left"></img>
            <p>Hafidz_1202204293</p>
        </div>
    </div>
    @endsection