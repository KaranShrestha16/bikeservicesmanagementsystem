<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mechanic\CreateMechanicRequest;
use App\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mechanic.index')->with('mechanic', Mechanic::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mechanic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMechanicRequest $request)
    {   

        Mechanic::create([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact,
        ]); 

        session()->flash('success', 'Mechanic Created Successfully');

        return redirect(route('mechanics.index'));

        //Created for testing purpose
        // Mechanic::create([
        //     'name' => request('name'),
        //     'address' => request('address'),
        //     'contact' => request('contact'),
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mechanic $mechanic)
    {
        return view('mechanic.create')->with('mechanic', $mechanic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMechanicRequest $request, Mechanic $mechanic)
    {
        
        $mechanic->update([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact
        ]);

        session()->flash('success', 'Mechanic Updated Successfully');

        return redirect(route('mechanics.index'));

        //Created for testing purpose
        // $data = request()->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'contact' => 'required'
        // ]);

        // $mechanic->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();

        session()->flash('success', 'Mechanic Deleted Successfully');

        return redirect(route('mechanics.index'));
    }
}
