<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateProfileRequest;
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

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'phoneno' => $request->phoneno,
            'address' => $request->address
        ]);

        session()->flash('success', 'User Proifile Updated');

        return redirect(route('users.view-profile'));
    }

}
