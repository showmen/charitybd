<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function post_landing(){
    	return view('post.postLanding');
    }
    
}
