<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserbackController extends Controller
{
    public function users(){
        $users = User::all();
        $roles =Role::all();
        return view('Backend.components.Users',compact('users','roles'));
    }
}
