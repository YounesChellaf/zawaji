<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invitation;

class InvitationController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inviter_id =$request->input('inviter_id');
        $slogan =$request->input('slogan');
        $party_room =$request->input('party_room');
        $location =$request->input('location');
        $date =$request->input('date');
        $time = $request->input('time');
        $broadcast = $request->input('broadcast');
        $destination = $request->input('destination');
        invitation::create([
            'inviter_id' => $inviter_id,
            'slogan' => $slogan,
            'party_room' => $party_room,
            'location' => $location,
            'date' => $date,
            'time' => $time,
            'broadcast' => $broadcast,
            'destination' => $destination,
        ]);
        return redirect()->back();
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
        $inviter_id =$request->input('inviter_id');
        $slogan =$request->input('slogan');
        $party_room =$request->input('party_room');
        $location =$request->input('location');
        $date =$request->input('date');
        $time = $request->input('time');
        $broadcast = $request->input('broadcast');
        $destination = $request->input('destination');

        $invitation = invitation::find(id);

        $invitation->slogan = $inviter_id;
        $invitation->slogan = $slogan;
        $invitation->party_room = $party_room;
        $invitation->location = $location;
        $invitation->date = $date;
        $invitation->time = $time;
        $invitation->broadcast = $broadcast;
        $invitation->destination = $destination;

        $invitation->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        invitation::destroy($id);
        return redirect()->back();
    }
}
