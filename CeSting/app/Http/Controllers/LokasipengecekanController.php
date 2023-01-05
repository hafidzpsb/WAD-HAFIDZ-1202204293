<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class LokasipengecekanController extends Controller
{
    public function gmaps()
    {
    	$locations = DB::table('lokasipengecekan')->get();
    	return view('cek_si_ibu.lokasi_pengecekan',compact('locations'));
    }
}