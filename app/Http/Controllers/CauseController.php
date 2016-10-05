<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CauseController extends Controller
{
    public function cause(){
    	return view('cause.cause');
    }

    public function cause_landing(){
    	return view('cause.causeLanding');
    }
    
}
