<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function Index(){
        return view('about');
    }
}
