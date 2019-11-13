<?php

namespace App\Http\Controllers;

use App\Reservation;
use MaddHatter\LaravelFullcalendar\Calendar;

class CalendarController extends Controller
{

    public function showCalendar(){
        if (Reservation::where('status','approuved')->count()){
            $Event = Reservation::where('status','approuved')->get();
            foreach($Event as $event){
                $events = Calendar::event(
                    $event->weddingType->name, //event title
                    true, //full day event?
                    $event->date_from, //start time (you can also use Carbon instead of DateTime)
                    $event->date_to,   //end time (you can also use Carbon instead of DateTime)
                    '2', //optionally, you can specify an event ID
                    [
                        'color' => $event->weddingType->color,
                        'url' => route('owner.reservation.delivered'),
                        'description' => "Event Description",
                        'textColor' => '#0A0A0A'
                    ]
                ) ;
            }
            $calendar = \Calendar::addEvents($events);
        }
        else{
            $calendar= null;
        }

        return view('dashboard.layouts.calender',compact('calendar'));
    }
}
