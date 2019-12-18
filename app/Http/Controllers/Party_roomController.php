<?php

namespace App\Http\Controllers;

use App\City;
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

    public function complete(Request $request)
    {
        $search = $request->get('term');

        $result = City::where('name', 'LIKE', '%'. $search. '%')->get();
        return response()->json($result);
    }

    public function search(Request $request){
        if ($request->post()){
            $city = City::where('name',$request->city)->first();
            $rooms = $city->room->where('status','approved');
            //$room = Party_room::where('status','approved')->where('name',$request->room)->first();
//            return redirect()->route('zawaji.party_rooms',$rooms);
            return view('zawaji.party_rooms')->withRooms($rooms)->withParty($rooms);
        }
    }

    public function roomDetails($id){
        $room = Party_room::find($id);
        return view('zawaji.room-details')->with('room',$room);
    }

    public function ShowRooms(Party_room $room){
        $rooms = Party_room::getRoom();
        return view('zawaji.party_rooms')->withRooms($rooms);
    }

    public function reservationBilling($id){
        return view('zawaji.billing')->withRoom(Party_room::find($id));
    }
    public function filter(Request $request){

//        dd(json_decode($request->rooms));
        $collection = collect();
        //dd(json_decode($request->rooms));
        foreach (json_decode($request->rooms) as $room){
            $city_id = $request->city_id;
            $type = $request->type;
            $date_from = $request->date_from;
            $date_to = $request->date_to;
            if ($city_id and !$type){
//                $rooms = Party_room::where('status','approved')->where('city_id',$city_id)->get();
//                return view('zawaji.room-section')->withRooms($rooms);
            }
            else if (!$city_id and $type){
                if ($room->type == $type)
                    $collection->push(Party_room::find($room->id));
            }
            else if (!$city_id and !$type and $date_from and $date_to ){

                if (Party_room::find($room->id)->getIsReserved($room->id,$date_from,$date_to) )
                    $collection->push(Party_room::find($room->id));
//                return view('zawaji.room-section')->withRooms($rooms);
            }
//            $rooms = Party_room::where('status','approved')->where('city_id',$city_id)->where('type',$type)->get();
//            return view('zawaji.room-section')->withRooms($rooms);
        }
        $rooms = $collection;
//      $collection->forget([]);
        //dd($rooms);
        return view('zawaji.room-section')->withRooms($rooms);
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
            //dd($request->kitchen);
                //$validated = $request->validated();
            Party_room::new($request);
            return redirect()->route('zawaji.landing');
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
        return redirect()->route('admin.showRooms');

    }
    public function bann($id){
        $party_room = Party_room::find($id);
        $party_room->status = 'banned';
        $party_room->save();
        return redirect()->back();
    }
}
