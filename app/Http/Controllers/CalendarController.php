<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function showCalendar(){
        $event = Reservation::all();
        for($i=0;$i<$event->count();$i++){
        $events[$i] = \Calendar::event(
            $event[$i]->reserver_name, //event title
            true, //full day event?
            $event[$i]->date_from, //start time (you can also use Carbon instead of DateTime)
            $event[$i]->date_to,   //end time (you can also use Carbon instead of DateTime)
            $event[$i]->weddingType->color //optionally, you can specify an event ID
        );
        }
        $calendar = \Calendar::addEvents($events);
        return view('dashboard.layouts.calender',compact('calendar'));
    }
}
