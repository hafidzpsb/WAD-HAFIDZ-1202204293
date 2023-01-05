<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $listartikel = Artikel::orderBy('id') -> get();
        return view('informasi_stunting.informasi_stunting', compact('listartikel'));
    }
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        return view('informasi_stunting.detail_artikel', compact('artikel'));
    }
}
