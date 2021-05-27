<?php

namespace App\Controllers\Routine;

use Core\Routines\Infrastructure\API\FirestoreApiDatasource;
use Illuminate\Routing\Controller;

class RoutineController extends Controller
{
    private FirestoreApiDatasource $firestoreApiDatasource;

    public function __construct(FirestoreApiDatasource $apiDatasource)
    {
        $this->firestoreApiDatasource = $apiDatasource;
    }

    public function __invoke(string $id)
    {
        $routine = $this->firestoreApiDatasource->getRoutinesById($id);

        return view('pages/routine', ['routine' => $routine]);
    }
}
