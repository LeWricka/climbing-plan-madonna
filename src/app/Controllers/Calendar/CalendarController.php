<?php

namespace App\Controllers\Calendar;

use Core\Routines\Domain\Routine;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CalendarController extends Controller
{
    public function __invoke(Request $request)
    {
        $routine1 = new Routine("1", "First Routine", new DateTime('2021-05-14'), "#e04f1a", "https://www.antennahouse.com/hubfs/xsl-fo-sample/pdf/basic-link-1.pdf?hsLang=en");
        $routine2 = new Routine("2", "First Routine 2.0", new DateTime('2021-05-14'), "#82b54b", "https://redkey.pro/storage/app/media/confirmed/soglasie.pdf");
        $routine3 = new Routine("3", "Second Routine", new DateTime('2021-05-17'), "#82b54b", "http://www.pdf995.com/samples/pdf.pdf");
        $routine4 = new Routine("4", "Third Routine", new DateTime('2021-05-20'), "#ffb119", "https://www.clickdimensions.com/links/TestPDFfile.pdf");
        $routine5 = new Routine("5", "Final Routine", new DateTime('2021-05-22'), "#e04f1a", "https://trello-attachments.s3.amazonaws.com/608d9c8745e0196dd46b1ba7/60a581b09ee2ee2e8939eab4/b1ac426795eb56afd25ad83c0cefd0f6/Routines%2B2.0%2Bintermediate%2Bcomplete%2B-%2Bmaquetado%2B(2)-compressed.pdf");

        $routines = [
            $routine1->routineToKeyValue(),
            $routine2->routineToKeyValue(),
            $routine3->routineToKeyValue(),
            $routine4->routineToKeyValue(),
            $routine5->routineToKeyValue()
        ];
        return view('pages/mainCalendar', ['routines' => $routines]);
    }
}
