<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DateTime;

class CalendarController extends Controller
{
    public function __invoke(Request $request)
    {
        $routine1 = new Routine("First Routine", new DateTime('2021-05-14'), new DateTime('2021-05-16'), "#e04f1a");
        $routine2 = new Routine("Second Routine", new DateTime('2021-05-17'), new DateTime('2021-05-19'), "#82b54b");
        $routine3 = new Routine("Third Routine", new DateTime('2021-05-20'), new DateTime('2021-05-20'), "#ffb119");
        $routine4 = new Routine("Final Routine", new DateTime('2021-05-22'), new DateTime('2021-05-24'), "#e04f1a");

        $routines = [$routine1->routineToJson(), $routine2->routineToJson(), $routine3->routineToJson(), $routine4->routineToJson()];

        return view('pages/mainCalendar', ['routines' => $routines]);
    }
}
