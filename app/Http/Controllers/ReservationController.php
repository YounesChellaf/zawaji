<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Party_room;
use App\Reservation;
use Illuminate\Http\Request;
use Rap2hpoutre\LaravelStripeConnect\StripeConnect;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zawaji.client_reservations')->withReservations(auth()->user()->reservations);
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
//            \Stripe\Stripe::setApiKey('sk_test_w0jUpurkqWgWxi9D7qSLtIxk00G6f3e5CL');
//            $customer = \Stripe\Account::create([
//                'type' => 'custom',
//                'country' => 'US',
//                'email' => auth()->user()->email,
//                'requested_capabilities' => [
//                    'transfers',
//                ],
//            ]);
//            $vendor = \Stripe\Account::create([
//                'type' => 'custom',
//                'country' => 'US',
//                'email' => Party_room::find($request->party_room_id)->owner->email,
//                'requested_capabilities' => [
//                    'transfers',
//                ],
//            ]);
//                StripeConnect::transaction($request->token)
//                    ->amount($request->price, 'usd')
//                    ->fee(50)
//                    ->from($customer)
//                    ->to($vendor)
//                    ->create();

            Reservation::new($request);
            $message = 'يمكنـك دفــع المستحـقات الى الحســاب البنكي المرفــق في الاسفل من اجــل الحجـز و من ثم التواصل مع صاحب القاعـة بوصل الدفع لتاكيــد حجـــزك';

            return view('zawaji.billing')->withRoom(Party_room::find($request->party_room_id))->withMessage($message);
        }
    }
    public function OwnerReservation(ReservationRequest $request){
        if ($request->post()){
            $validated = $request->validated();
            Reservation::OwnerNew($request);
            return redirect()->back();
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
    public function update(ReservationRequest $request, $id)
    {
        if ($request->post()){
            $validated = $request->validated();
            Reservation::editer($request,$id);
            return redirect()->back();
        }

    }

    public function confirm($id){
        $reservation = Reservation::find($id);
        $reservation->status = 'approuved';
        $reservation->save();
        return redirect()->back();
    }

    public function disapprouve($id){
        $reservation = Reservation::find($id);
        $reservation->status = 'disapproved';
        $reservation->save();
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
        Reservation::destroy($id);
        return redirect()->back();
    }
}
