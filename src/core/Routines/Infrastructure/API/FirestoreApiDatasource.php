<?php

namespace Core\Routines\Infrastructure\API;

use Google\Cloud\Firestore\FirestoreClient;

class FirestoreApiDatasource
{
    /**
     * @var FirestoreClient
     */
    private FirestoreClient $firestoreClient;

    /**
     * FirestoreApiDatasource constructor.
     * @throws \Google\Cloud\Core\Exception\GoogleException
     */
    public function __construct()
    {
        $this->firestoreClient = new FirestoreClient([
            'projectId' => 'madonna-312418',
            'keyFile' => json_decode(file_get_contents(config_path('serviceAccount.json')), true)
        ]);
    }

    public function getAllRoutines()
    {
        return $this->firestoreClient
            ->collection('routines')
            ->documents();
    }

    public function getRoutinesByDate($date){
        return $this->firestoreClient
            ->collection('routines')
            ->where('date', '=', $date)
            ->documents();
    }

    public function getRoutinesById($id){
        return $this->firestoreClient
            ->collection('routines')
            ->document($id)
            ->snapshot();
    }

    public function getUserCalendar($user){
        return $this->firestoreClient
            ->collection('calendar')
            ->document($user)
            ->collection('routines')
            ->documents();
    }
}
