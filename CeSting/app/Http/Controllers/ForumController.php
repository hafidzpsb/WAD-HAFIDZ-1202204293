<?php

namespace App\Http\Controllers;
use App\Models\Forum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $listforum = Forum::orderBy('id') -> get();
        return view('1000_hari_anak.forum_cepat', compact('listforum'));
    }
    public function create()
    {
        return view('1000_hari_anak.forum_cepat_create');
    }
    public function store(Request $request)
    {
        Forum::create([
            'forum_id' => Auth::user() -> id,
            'username' => Auth::user() -> username,
            'judul_forum' => $request -> judul_forum,
            'isi_forum' => $request -> isi_forum,
        ]);
        return redirect('/forum');
    }
    public function edit($id)
    {
        $forum = Forum::find($id);
        return view('1000_hari_anak.forum_cepat_detail', compact('forum'));
    }
    public function destroy($id)
    {
        Forum::find($id)->delete();
    }
}