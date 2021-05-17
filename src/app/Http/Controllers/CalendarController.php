<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CalendarController extends Controller
{
    public function __invoke(Request $request)
    {
        $event1 = new Event(["title" => "First Rutine", "start" => "2021-05-14", "end" => "2021-05-16", "color" => "#e04f1a"]);
        $event2 = new Event(["title" => "Second Rutine", "start" => "2021-05-17", "end" => "2021-05-19", "color" => "#82b54b"]);
        $event3 = new Event(["title" => "Third Rutine", "start" => "2021-05-20", "color" => "#ffb119"]);

        $events = [];
        array_push($events, $event1, $event2, $event3);
        return view('pages/mainCalendar', ['events' => $events]);
    }
}
