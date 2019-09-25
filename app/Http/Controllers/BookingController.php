<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mechanic;
use App\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking.index')->with('user',auth()->user())->with('mechanic',Mechanic::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.view')->with('booking', Booking::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        
        Booking::create($this->validateRequest());
        session()->flash('success', 'Booking Successfully ');

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    public function history()
    {
       //return view('booking.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validateRequest(){
       return request()->validate([ 
            'vehicle_brand' => 'required|min:3' ,
            'vehicle_name' => 'required|min:3',
            'vehicle_number' => 'required|min:3',
            'service_type' =>'required',
            'service_date' => 'required',
            'service_time' => 'required',
            'mechanic_id' =>'required',
            'servicing' =>'required',
            'user_id' => '', 
            'admin_remark' =>'',
            'service_charge' =>'',
            'parts_change' => '',
            'additional_charge' =>'',
            
            
        ]);
    }


   
}
