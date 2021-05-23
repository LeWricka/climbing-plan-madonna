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
        printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
    }

    public function getRoutines()
    {
        $user = $this->firestoreClient->collection('users')->document('iker@540deg.com')->snapshot();
        if ($user->exists()) {
            printf('Document data:' . PHP_EOL);
            print_r($user->data());
        } else {
            printf('Document %s does not exist!' . PHP_EOL, $user->id());
        }
    }
}
