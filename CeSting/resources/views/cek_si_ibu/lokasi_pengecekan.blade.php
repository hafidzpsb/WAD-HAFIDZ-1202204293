@extends('navbar')
@section('isihalaman')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
<style type="text/css">
    #mymap {
        border:1px solid red;
        width: 800px;
        height: 500px;
    }
</style>
<div class="container mt-5 mb-5">
    <div class="card row mb-3">
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid" width="150px" src="{{asset('assets/images/Icon-Si_Ibu.png')}}">
                <h1><span class="font-weight-bold"><br>Lokasi Pengecekan</span></h1>
            </div>
        </div>
    </div>
    <center>
        <div id="mymap"></div>
            <script type="text/javascript">
                var locations = <?php print_r(json_encode($locations)) ?>;    
                var mymap = new GMaps({      
                    el: '#mymap',
                    lat: 6.9175,
                    lng: 107.6191,      
                    zoom:6
                });
                $.each( locations, function( index, value ){
                    mymap.addMarker({
                        lat: value.lat,
                        lng: value.lng,
                        title: value.rumah_sakit,
                        click: function(e) {
                        alert('This is '+value.rumah_sakit+', gujarat from India.');
                    }
                    });
                });
            </script>
        </div>
    </center>
</div>
@endsection