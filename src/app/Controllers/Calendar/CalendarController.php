<?php

namespace App\Controllers\Calendar;

use Core\Routines\Infrastructure\API\FirestoreApiDatasource;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CalendarController extends Controller
{
    private FirestoreApiDatasource $firestoreApiDatasource;

    public function __construct(FirestoreApiDatasource $apiDatasource)
    {
        $this->firestoreApiDatasource = $apiDatasource;
    }

    public function __invoke(Request $request)
    {
        $userRoutines = $this->firestoreApiDatasource->getUserCalendar('iker@540deg.com')->rows();

        return view('pages/mainCalendar', ['routines' => $userRoutines]);
    }
}
