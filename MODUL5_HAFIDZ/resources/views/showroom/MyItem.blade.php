<?php use App\Models\Showroom ?>
@extends('navbar')
@section('isihalaman')
    <h1><b>My Show Room</b></h1>
    <p>List Show Room <?php if (isset($_SESSION['nama'])){ echo $_SESSION['nama'];} ?></p>
        @foreach($listmobil as $list)
            <div class='row row-cols-1 row-cols-md-2 g-4'>
                <div class='col'>
                    <div class='card'>
                        <img class='card-img-top' width='250' height='350' src='/foto/{{$list->image}}'></img>
                        <div class='card-body'>
                            <h5 class='card-title'><center><b>{{$list->name}}</b></center></h5>
                            <p class='card-text'>{{$list->description}}</p>
                        </div>
                        <div class='card-footer'>
                            <a href='/showroom/{{$list->id}}/edit' button class='btn btn-primary' id='Details'>Detail</a>
                            <a href='/showroom/{{$list->id}}/delete' button class='btn btn-danger' id='Delete'>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    <div>
        <p>Jumlah Mobil: <?php echo(Showroom::all()->count()) ?></p>
    </div>
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
    @endsection