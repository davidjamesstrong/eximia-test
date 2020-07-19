<?php

namespace App\Http\Controllers;

use App\Subscriber;
use App\Mail\Subscribed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('subscribe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'first_name' => 'required|min:2|max:100',
                'last_name' => 'required|min:2|max:100',
                'email_address' => 'required|email|min:4|max:255'
            ]);

        $subscriber = new Subscriber;
        $subscriber->first_name = request('first_name');
        $subscriber->last_name = request('last_name');
        $subscriber->email_address = request('email_address');
        $subscriber->save();

        Mail::to( $request->email_address )->send( new Subscribed($subscriber) );

        return view('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscribe, $email)
    {
        $now = Carbon\Carbon::now();

        Subscriber::where('email_address', '=', $email )->update(['verified_on' => $now]);

        return view('verified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
