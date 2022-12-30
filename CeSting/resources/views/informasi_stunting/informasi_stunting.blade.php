@extends('navbar')
<?php use App\Models\Artikel ?>
@section('isihalaman')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid" width="150px" src="{{asset('assets/images/Icon-Informasi_Stunting.png')}}">
                <h1><span class="font-weight-bold"><br>Informasi Stunting</span></h1>
            </div>
        </div>
    </div>
    @foreach($listartikel as $artikel)
        <div class="row">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="/artikel/{{$artikel -> id}}/edit" style="text-align: center"><h2>{{$artikel -> judul}}</h2></a>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <p>{{$artikel -> isi}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection