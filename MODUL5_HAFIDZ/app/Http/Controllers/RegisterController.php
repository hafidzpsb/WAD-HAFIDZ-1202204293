<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.Register');
    }
    public function store(Request $request)
    {
        $p=$request-> password;
        $rp=$request->repassword;
        if ($request-> password != $request->repassword)
        {
            echo "<script>alert('Kata sandi tidak cocok')</script>";
            return redirect('/register');
        }
        else
        {
            if (User::all()->count()>0)
            {
                    User::create([
                        'name' => $request -> nama,
                        'no_hp' => $request -> no_hp,
                        'email' => $request -> email,
                        'password' => $request -> password
                    ]);
                    return redirect('/login/create');
            }
            else
            {
                User::create([
                    'name' => $request -> nama,
                    'no_hp' => $request -> no_hp,
                    'email' => $request -> email,
                    'password' => $request -> password
                ]);
                return redirect('/login/create');
            }
        }
    }
}