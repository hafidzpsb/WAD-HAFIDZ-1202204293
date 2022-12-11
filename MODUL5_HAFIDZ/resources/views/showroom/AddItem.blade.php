@extends('navbar')
@section('isihalaman')
    <h3><b>Tambah Mobil</b></h3>
    <p>Tambah Mobil Baru Anda Ke List Showroom</p>
    <div class="col">
        <form action="/showroom" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="namamobil"><b>Nama Mobil</b></label>
                <input type="text" name="namamobil" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="namapemilik"><b>Nama Pemilik</b></label>
                <input type="text" name="namapemilik"" class="form-control" placeholder="Nama - NIM" value="">
            </div>
            <div class="mb-3">
                <label for="merkmobil"><b>Merk</b></label>
                <input type="text" name ="merkmobil" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="tanggalbeli"><b>Tanggal Beli</b></label>
                <input type="date" name="tanggalbeli" class="form-control" placeholder="mm/dd/yyyy">
            </div>
            <div class="mb-3">
                <label for="deskripsi"><b>Deskripsi</b></label>
                <textarea class="form-control" rows="3" name="deskripsi"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto"><b>Foto</b></label>
                <input type="file" name="foto" id="foto" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
                <label for="statuspembayaran"><b>Status Pembayaran</b></label>
                <div class="mb-3">
                    <input type="radio" name="statuspembayaran" id="statuspembayaran" value="Lunas">
                    <label for="Lunas">Lunas</label>
                    <input type="radio" name="statuspembayaran" id="statuspembayaran" value="Belum Lunas">
                    <label for="Belum Lunas">Belum Lunas</label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <input class="btn btn-primary" type="submit" name="selesai" value="Selesai">                   
            </div>
        </form>
    </div>
    @endsection