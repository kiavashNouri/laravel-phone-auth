<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function showToken()
    {
        return view('auth.token');
    }

    public function token()
    {

    }
}
