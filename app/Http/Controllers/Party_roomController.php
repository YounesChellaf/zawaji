<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartyRoomRequest;
use App\Image;
use App\Party_room;
use Illuminate\Http\Request;

class Party_roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.layouts.room_party');
    }

    public function showAll(){
        return view('dashboard.admin_layouts.rooms');
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
        if ($request->post()){
                //$validated = $request->validated();
                Party_room::new($request);
            return redirect('/');
        }
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
        Party_room::destroy($id);
        return redirect()->back();
    }

    public function approuv($id){
        $party_room = Party_room::find($id);
        $party_room->status = 'approved';
        $party_room->save();
        return redirect()->back();

    }
    public function bann($id){
        $party_room = Party_room::find($id);
        $party_room->status = 'banned';
        $party_room->save();
        return redirect()->back();
    }
}
