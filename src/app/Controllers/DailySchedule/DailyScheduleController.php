<?php

namespace App\Controllers\DailySchedule;

use Core\Routines\Infrastructure\API\FirestoreApiDatasource;
use Illuminate\Routing\Controller;

class DailyScheduleController extends Controller
{
    private FirestoreApiDatasource $firestoreApiDatasource;

    public function __construct(FirestoreApiDatasource $apiDatasource)
    {
        $this->firestoreApiDatasource = $apiDatasource;
    }

    public function __invoke($date)
    {
        $routines = $this->firestoreApiDatasource->getRoutinesByDate($date);

        return view('pages/dailySchedule', ['date' => $date, 'routines' => $routines]);
    }

}
