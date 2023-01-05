@extends('navbar')
@section('isihalaman')
<div class="container mt-5 mb-5">
    <div class="card row mb-3">
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid" width="150px" src="{{asset('assets/images/Icon-1000_Hari_Anak.png')}}">
                <h1><span class="font-weight-bold"><br>Catatan Pertumbuhan</span></h1>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="p-3 py-5">
            <form action="/catat_tumbuh" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Catatan Pertumbuhan</h2></a>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Berat Badan (kg)</h5>
                                <h1><input type="int" class="form-control-plaintext" value="{{App\Models\Catattumbuh::where('anak_id', Auth::user()->id)->value('berat_badan_anak')}}" name="berat_badan_anak" placeholder="..."></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tinggi Badan (cm)</h5>
                                <h1><input type="int" class="form-control-plaintext" value="{{App\Models\Catattumbuh::where('anak_id', Auth::user()->id)->value('tinggi_badan_anak')}}" name="tinggi_badan_anak" placeholder="..."></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lingar Kepala (cm)</h5>
                                <h1><input type="int" class="form-control-plaintext" value="{{App\Models\Catattumbuh::where('anak_id', Auth::user()->id)->value('lingkar_kepala_anak')}}" name="lingkar_kepala_anak" placeholder="..."></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit" name="rekam_janin">
                            Simpan
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="d-flex flex-row-reverse justify-content-between align-items-center">
                    {{App\Models\Catattumbuh::where('anak_id', Auth::user()->id)->value('updated_at')}}
                </div>
            </form>
        </div>
    </div>
</div>
@endsection