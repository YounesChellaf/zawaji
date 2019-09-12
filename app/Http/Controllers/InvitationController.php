<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitationRequest;
use Illuminate\Http\Request;
use App\invitation;

class InvitationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function store(InvitationRequest $request)
    {
        if ($request->post()){
            $validated = $request->validated();
            Invitation::new($request);
        }
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
    public function update(InvitationRequest $request, $id)
    {

        $invitation = invitation::find(id);

        $invitation->slogan = $request->inviter_id;
        $invitation->slogan = $request->slogan;
        $invitation->party_room = $request->party_room;
        $invitation->location = $request->location;
        $invitation->date = $request->date;
        $invitation->time = $request->time;
        $invitation->broadcast = $request->broadcast;
        $invitation->destination = $request->destination;

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
