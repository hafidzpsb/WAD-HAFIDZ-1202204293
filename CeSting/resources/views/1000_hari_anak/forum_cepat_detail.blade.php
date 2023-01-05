@extends('navbar')
@section('isihalaman')
<div class="container mt-5 mb-5">
    <div class="card row mb-3">
        <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="/forum/{{$forum -> id}}/edit" style="text-align: center"><h2>{{$forum -> judul_forum}}</h2></a>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <p>{{$forum -> isi_forum}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection