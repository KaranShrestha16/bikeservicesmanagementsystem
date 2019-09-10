<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view()
    {
        return view('user.view')->with('user', auth()->user());
    }

    public function edit()
    {
        return view('user.edit')->with('user', auth()->user());
    }


}
