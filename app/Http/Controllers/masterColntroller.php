<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class masterColntroller extends Controller
{
    public function webmaster(){
        return view('Backend.webmaster');
    }
}
