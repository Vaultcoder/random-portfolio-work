<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Request;
use DB;
use App\Projekt;

class homeController extends Controller
{
    public function showHome() 
    {
		$projekt = Projekt::all();

        return view('welcome', ['projekt' => $projekt]);
    	
    }  
}
