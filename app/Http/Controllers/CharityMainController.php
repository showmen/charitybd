<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CharityMainController extends Controller
{
    public function home(){
    	return view('charityMain.home');
    }
    public function portfolio(){
    	return view('charityMain.portfolio');
    }

}
