<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function Login(){
        return view("Frontend.login");
     }
     public function register(){
        return view("Frontend.signup");
     }
}
