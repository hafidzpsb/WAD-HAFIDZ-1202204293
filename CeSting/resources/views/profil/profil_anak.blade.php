@extends('navbar')
@section('isihalaman')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Nama Anak</span>
                <span></span>
            </div>
        </div>
        <div class="col">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profil Anak</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Nama Depan</label>
                        <input type="text" class="form-control" placeholder="Nama Depan" value="" name="nama_depan">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Nama Belakang</label>
                        <input type="text" class="form-control" placeholder="Nama Belakang" value="" name="nama_belakang">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="mm-dd-yyyy" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Tinggi Badan</label>
                        <input type="text" class="form-control" placeholder="Tinggi Badan" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Berat Badan</label>
                        <input type="text" class="form-control" placeholder="Berat Badan" value="">
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <button class="btn btn-primary profile-button" type="button">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection