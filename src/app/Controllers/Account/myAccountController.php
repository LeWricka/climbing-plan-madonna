<?php

namespace App\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class myAccountController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages/myAccount');
    }
}
