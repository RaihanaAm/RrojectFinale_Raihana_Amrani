<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserbackController extends Controller
{
    public function users(){
        $users = User::all();
        return view('Backend.components.Users',compact('users'));
    }
}
