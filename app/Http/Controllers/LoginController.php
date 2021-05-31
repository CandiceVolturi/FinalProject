<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function menu()
    {
        return view('menu');
    }
    
    public function create()
    {
        return view('lgn');
    }

    public function store(Request $request)
    {
        //insert
        Login::create([
            'email' => $request->email,
            'password' => $request->password,
        ])

        return redirect('/lgn');
    }
}

