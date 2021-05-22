<?php

namespace App\Http\Controllers;

use App\DataSource\API\FirestoreApiDatasource;
use App\Models\Routine;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * @var FirestoreApiDatasource
     */
    private FirestoreApiDatasource $firestoreApiDatasource;

    /**
     * UserController constructor.
     */
    public function __construct(FirestoreApiDatasource $apiDatasource)
    {
        $this->firestoreApiDatasource = $apiDatasource;
    }

    public function __invoke(Request $request)
    {
        $this->firestoreApiDatasource->getRoutines();
//        return view('pages/mainCalendar', ['routines' => $routines]);
    }
}
