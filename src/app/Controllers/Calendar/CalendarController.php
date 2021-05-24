<?php

namespace App\Controllers\Calendar;

use Core\Routines\Domain\Routine;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CalendarController extends Controller
{
    public function __invoke(Request $request)
    {
        $routine1 = new Routine("First Routine", new DateTime('2021-05-14'), "#e04f1a");
        $routine2 = new Routine("First Routine 2.0", new DateTime('2021-05-14'), "#82b54b");
        $routine3 = new Routine("Second Routine", new DateTime('2021-05-17'), "#82b54b");
        $routine4 = new Routine("Third Routine", new DateTime('2021-05-20'), "#ffb119");
        $routine5 = new Routine("Final Routine", new DateTime('2021-05-22'), "#e04f1a");

        $routines = [
            $routine1->routineToKeyValue(),
            $routine2->routineToKeyValue(),
            $routine3->routineToKeyValue(),
            $routine4->routineToKeyValue(),
            $routine5->routineToKeyValue()
        ];
        return view('pages/mainCalendar', ['routines' => $routines]);
    }
}
