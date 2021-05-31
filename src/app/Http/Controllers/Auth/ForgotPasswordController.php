<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ForgotPasswordController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('auth/passwords/email');
    }
}
