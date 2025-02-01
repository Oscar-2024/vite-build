<?php

namespace App\Http\Controllers\Backoffice\Auth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{

    public function index()
    {
        return view('backoffice.auth.login');
    }
}
