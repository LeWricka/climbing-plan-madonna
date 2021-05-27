<?php

namespace App\Controllers\Routine;

use Core\Routines\Domain\Routine;
use Illuminate\Routing\Controller;
use DateTime;

class RoutineController extends Controller
{
    public function __invoke(string $id)
    {
        $routine = $this->findRoutineById($id);
        return view('pages/routine', ['routine' => $routine]);
    }

    public function findRoutineById(string $id){
        foreach ($this->getAllRoutines() as $routine){
            if ($routine->getId()===$id){
                return $routine;
            }
        }
    }

    public function getAllRoutines()
    {
        return [
            new Routine("1", "First Routine", new DateTime('2021-05-14'), "#e04f1a", "https://www.antennahouse.com/hubfs/xsl-fo-sample/pdf/basic-link-1.pdf?hsLang=en"),
            new Routine("2", "First Routine 2.0", new DateTime('2021-05-14'), "#82b54b", "https://redkey.pro/storage/app/media/confirmed/soglasie.pdf"),
            new Routine("3", "Second Routine", new DateTime('2021-05-17'), "#82b54b", "http://www.pdf995.com/samples/pdf.pdf"),
            new Routine("4", "Third Routine", new DateTime('2021-05-20'), "#ffb119", "https://www.clickdimensions.com/links/TestPDFfile.pdf"),
            new Routine("5", "Final Routine", new DateTime('2021-05-22'), "#e04f1a", "https://trello-attachments.s3.amazonaws.com/608d9c8745e0196dd46b1ba7/60a581b09ee2ee2e8939eab4/b1ac426795eb56afd25ad83c0cefd0f6/Routines%2B2.0%2Bintermediate%2Bcomplete%2B-%2Bmaquetado%2B(2)-compressed.pdf")
        ];
    }
}
