<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class DailyScheduleController extends Controller
{

    public function __invoke(String $date)
    {

        return view('pages/dailySchedule', ['date'=>$date]);
    }
}
