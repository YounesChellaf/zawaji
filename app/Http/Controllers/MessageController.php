<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Message;
use App\Party_room;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin_layouts.messages');
    }

    public function showRoom($id){
        $room = Party_room::find($id);
        return view('dashboard.admin_layouts.room-to-confirm')->with('room',$room);
    }


    public function store(MessageRequest $request)
    {
        if ($request->post()){
            $validated = $request->validated();
            Message::new($request);
            return view('zawaji.landing');
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

    public function approuve($id){
        $message = Message::find($id);
        $message->status = 'approved';
        $message->save();
        return redirect()->back();
    }


    public function destroy($id)
    {
        Message::destroy($id);
        return redirect()->back();
    }
}
