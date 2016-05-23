<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Request;
use DB;
use App\Projekt;

class projektController extends Controller
{
    public function showProjekt($id) 
    {

    	$i = Projekt::find($id);

        return view('projekt', ['test' => $i]);
    	
    }  
}
