<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdatePasswordRequest;
use App\Http\Requests\Users\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        if(isset($request->image))
        {
            $image = $request->image->store('users');

            $user->update([
                'name' => $request->name,
                'phoneno' => $request->phoneno,
                'address' => $request->address,
                'image' => $image
            ]);

            session()->flash('success', 'User Profile Updated');
    
            return redirect(route('users.view-profile'));
        } else
        {

            $user->update([
                'name' => $request->name,
                'phoneno' => $request->phoneno,
                'address' => $request->address
            ]);
    
    
            session()->flash('success', 'User Profile Updated');
    
            return redirect(route('users.view-profile'));
        }

    }

    public function edit_password()
    {
        return view('user.edit_password')->with('user', auth()->user());
    }
    
    public function update_password(UpdatePasswordRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        session()->flash('success', 'User Password Updated');

        return redirect(route('users.view-profile'));
    }

    public function maps()
    {
        return view('user.map');
    }

}
