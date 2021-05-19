<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Routine;

class DailyScheduleController extends Controller
{

    public function __invoke($date)
    {
        $routines = $this->getRoutinesOfDay($date);
        return view('pages/dailySchedule', ['date' => $date, 'routines' => $routines]);
    }

    public function getRoutinesOfDay(string $date)
    {
        $allRroutines = $this->getAllRoutines();
        $routinesOfDay = [];
        foreach ($allRroutines as $routine){
            if ($routine->getStart() == $date){
                array_push($routinesOfDay, $routine);
            }
        }
        return $routinesOfDay;

    }
    public function getAllRoutines(){
        return [
            new Routine("First Routine", "2021-05-14", "2021-05-16", "#e04f1a"),
            new Routine("First Routine 2.0", "2021-05-14", "2021-05-16", "#82b54b"),
            new Routine("Second Routine", "2021-05-17", "2021-05-19", "#82b54b"),
            new Routine("Third Routine", "2021-05-20", "2021-05-20", "#ffb119"),
            new Routine("Final Routine", "2021-05-22", "2021-05-24", "#e04f1a")
        ];
    }
}
