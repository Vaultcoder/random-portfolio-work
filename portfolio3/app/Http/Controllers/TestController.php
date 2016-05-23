<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class TestController extends Controller
{

    public fuction ShowTest()
    {
        return view('test');
    }
}
