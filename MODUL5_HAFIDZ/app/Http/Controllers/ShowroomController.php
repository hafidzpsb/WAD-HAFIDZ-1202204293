<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller
{
    public function index()
    {
        $listmobil=Showroom::orderBy('id')->get();
        return view('showroom.MyItem', compact('listmobil'));
    }
    public function create()
    {
        return view('showroom.AddItem');
    }
    public function store(Request $request)
    {
        $namafoto = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('foto'), $namafoto);
        Showroom::create([
            'name' => $request -> namamobil,
            'owner' => $request -> namapemilik,
            'brand' => $request -> merkmobil,
            'purchase_date' => $request -> tanggalbeli,
            'description' => $request -> deskripsi,
            'image' => $namafoto,
            'status' => $request -> statuspembayaran
        ]);
        return redirect('/showroom');
    }
}