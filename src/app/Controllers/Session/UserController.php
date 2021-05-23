<?php

namespace App\Controllers\Session;

use Core\Routines\Infrastructure\API\FirestoreApiDatasource;
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
