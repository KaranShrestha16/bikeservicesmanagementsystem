<?php

namespace App\Http\Controllers;

use App\Http\Requests\Inquiry\CreateInquiryRequest;
use App\Http\Requests\Inquiry\UpdateInquiryRequest;
use App\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inquiry.index')->with('inquiries',Inquiry::where('status','not')->get());
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function responded()
    {
        return view('inquiry.index')->with('inquiries',Inquiry::where('status','completed')->get());
    }

            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        //return view('inquiry.index')->with('inquiries',Inquiry::where('user_id',Auth::user()->id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inquiry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInquiryRequest $request ,Inquiry $inquiry)
    {
        $inquiry->user_id = Auth::user()->id;

        $inquiry->title = $request->title;

        $inquiry->body = $request->body;

        $inquiry->save();

        session()->flash('success', 'Inquiry Created Successfully');

        return redirect('/home');

        //Created for testing purpose
        // Inquiry::create([
        //     'title' => request('title'),
        //     'body' => request('body')
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
    public function edit($id)
    {
        return view('inquiry.edit')->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInquiryRequest $request, Inquiry $inquiry)
    {
        $inquiry->response = $request['response'];

        $inquiry->status = 'completed';

        $inquiry->save();

        session()->flash('success', 'Inquiry Responded Successfully');

        return redirect('/admin');
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
}
