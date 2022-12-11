<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('user.Login');
    }
    public function store(Request $request)
    {
        if (isset($request -> remember))
        {
            session_start();
            setCookie("Email", $request -> email);
            setCookie("Password", $request -> password);
        }
        if (User::all()->count() > 0)
        {
            $cek=User::where('password', '=', $request -> password)->get();
            if ($request->password == [$cek])
            {
                session_start();
                $_SESSION['LOGIN']=TRUE;
                $_SESSION['nama']=User::where('name')->where('email', $request -> email)->get();
                $_SESSION['uid']=User::where('id')->where('email', $request -> email)->get();
                $_SESSION['login']='berhasil';
                return redirect('/');
            }
            else
            {
                $_SESSION['message']='Password anda salah, silahkan coba lagi!';
                return redirect('/login/create');
                exit();
            }
        }
        $_SESSION['message']='Gagal Login';
        return redirect('/login/create');
    }
}