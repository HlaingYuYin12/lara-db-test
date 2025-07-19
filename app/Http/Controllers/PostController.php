<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //direct post list page
    public function index(){
        return view('post.list');
    }
}
