<?php

namespace App\Controllers\DailySchedule;

use Core\Routines\Domain\Routine;
use DateTime;
use Illuminate\Routing\Controller;

class DailyScheduleController extends Controller
{
    public function __invoke($date)
    {
        $routines = $this->getRoutinesOfDay($date);
        return view('pages/dailySchedule', ['date' => $date, 'routines' => $routines]);
    }

    public function getRoutinesOfDay(string $date)
    {
        $allRoutines = $this->getAllRoutines();
        $routinesOfDay = [];
        foreach ($allRoutines as $routine) {
            if ($routine->getStart()->format('Y-m-d') == $date) {
                array_push($routinesOfDay, $routine);
            }
        }
        return $routinesOfDay;
    }

    public function getAllRoutines()
    {
        return [
            new Routine("First Routine", new DateTime('2021-05-14'), "#e04f1a"),
            new Routine("First Routine 2.0", new DateTime('2021-05-14'), "#82b54b"),
            new Routine("Second Routine", new DateTime('2021-05-17'), "#82b54b"),
            new Routine("Third Routine", new DateTime('2021-05-20'), "#ffb119"),
            new Routine("Final Routine", new DateTime('2021-05-22'), "#e04f1a")
        ];
    }
}
