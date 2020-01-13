<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\PartyRoomRequest;
use App\Image;
use App\Party_room;
use App\PriceCategory;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Rap2hpoutre\LaravelStripeConnect\Stripe;

class Party_roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.layouts.room.party_rooms');
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

//    public function ShowRooms(Party_room $room){
//        $rooms = Party_room::getRoom();
//        return view('zawaji.party_rooms')->withRooms($rooms);
//    }

    public function reservationBilling($id){
        return view('zawaji.billing')->withRoom(Party_room::find($id));
    }

    public function filter(Request $request){
        $collection = collect();
        foreach (json_decode($request->rooms) as $room){
            $price = $request->price;
            $type = $request->type;
            $date_from = $request->date_from;
            $date_to = $request->date_to;
            $selected_room = Party_room::find($room->id);
            $selected_price = PriceCategory::find($price);
            if (!$price and !$type and !$date_from and !$date_to){
                  $collection->push(Party_room::find($room->id));
            }
            else if ($price and !$type and !$date_from and !$date_to){
                  if ($selected_room->getPrice() > $selected_price->from and $selected_room->getPrice() < $selected_price->to){
                      $collection->push($selected_room);
                  }
            }
            else if (!$price and $type and !$date_from and !$date_to){
                if ($room->type == $type)
                    $collection->push($selected_room);
            }
            else if (!$price and !$type and $date_from and $date_to ){
                if ($selected_room->getIsReserved($room->id,$date_from,$date_to) )
                    $collection->push($selected_room);
            }
            else if ($price and $type and !$date_from and !$date_to){
                if ($room->type == $type and $selected_room->getPrice() > $selected_price->from and $selected_room->getPrice() < $selected_price->to){
                    $collection->push($selected_room);
                }
            }
            else if ($price and !$type and $date_from and $date_to){
                if ( $selected_room->getPrice() > $selected_price->from
                    and $selected_room->getPrice() < $selected_price->to
                    and $selected_room->getIsReserved($room->id,$date_from,$date_to) )
                    $collection->push($selected_room);
            }
            else if (!$price and $type and $date_from and $date_to){
                if ($room->type == $type and $selected_room->getIsReserved($room->id,$date_from,$date_to) )
                    $collection->push($selected_room);
            }
            else if ($price and $type and $date_from and $date_to){
                if ($room->type == $type
                    and $selected_room->getIsReserved($room->id,$date_from,$date_to)
                    and $selected_room->getPrice() > $selected_price->from
                    and $selected_room->getPrice() < $selected_price->to)
                    $collection->push($selected_room);
            }
        }
        $rooms = $collection;
        return view('zawaji.room-section')->withRooms($rooms);
    }

    public function friendReservation(Request $request){
        $date = new CarbonImmutable($request->date);
        $inf_limit = $date->subDays(10);
        $max_limit = $date->addDays(10);

        $reservations = Party_room::find($request->room_id)->reservations
            ->whereBetween('date_from',[$inf_limit,$max_limit])
        ;
        return view('zawaji.friend_reservation')->withReservations($reservations);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layouts.room.create_room_party');
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
        return view('dashboard.layouts.room.update_room_party')->withRoom(Party_room::find($id));
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

    public static function room_static(){
        $statistics = collect();
        for ($i=0;$i<12;$i++){
            $statistics->push(Party_room::whereMonth('created_at',$i+1)->count());
        }
        return $statistics;
    }
}
