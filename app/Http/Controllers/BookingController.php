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
        $booking=Booking::where('servicing','pending')->get(); 
        return view('service.pending_service')->with('booking', $booking);
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
        $userId=auth()->user();
        $booking=Booking::where('user_id',$userId->id)->get();
        return view('booking.history')->with('booking',$booking);

        // return redirect(route('booking.'));
    }

    public function view_pending($id){
        $booking=Booking::where('id',$id)->get();
       return view('service.view_pending_servic')->with('bookings',$booking);
    }

    public function complete_service(){
       $booking=Booking::where('servicing','=','complete')->get();
       return view('service.complete_service')->with('booking',$booking);
    }

    

    public function complete_view($bookingID){
        $booking=Booking::where('id',$bookingID)->get();
        return view('service.complete_view')->with('bookings',$booking);
     }

    public function update_pending(Booking $booking){
        
        $data = request()->all();

        $booking->admin_remark = $data['admin_remark'];

        $booking->service_charge = $data['service_charge'];

        $booking->parts_change = $data['parts_change'];

        $booking->additional_charge = $data['additional_charge'];
        
        $booking->servicing = $data['service_request'];

        $booking->save();

        return redirect('/admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking=Booking::where('id',$id)->get();
        return view('booking.view_history')->with('bookings',$booking);
    }

     
    
    public function history()
    {
        $userId=auth()->user();
       $booking=Booking::where('user_id',$userId->id)->get();
       /** return view('booking.history',compact('booking'));  */ 
    /**  return view('booking.history',['booking'=> $booking]);*/ 
       return view('booking.history')->with('booking',$booking);
    }

    public function service_request()
    {
       
       $booking=Booking::where('servicing','Wait for approve')->get(); 
       return view('service.service_request')->with('booking',$booking);
    }
    
    public function service_request_view($id)
    {
       
       $booking=Booking::where('id',$id)->get(); 
       return view('service.view_service_request')->with('bookings',$booking);
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
    public function update(Booking $booking)
    {
        $booking->update($this->validateRequest());
        $booking=Booking::where('servicing','Wait for approve')->get(); 
        session()->flash('success', ' Status has been updated ');
        return view('service.service_request')->with('booking',$booking);


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
            'user_id' => 'required', 
            'admin_remark' =>'required',
            'service_charge' =>'required',
            'parts_change' => 'required',
            'additional_charge' =>'required',
            'service_request' =>'required',
            
            
        ]);
    }


   
}
