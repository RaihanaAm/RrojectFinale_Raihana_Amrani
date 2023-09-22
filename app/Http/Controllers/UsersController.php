<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required'], // Ensure email uniqueness
        ]);

        $randomPassword = Str::random(12);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($randomPassword),
        ])->assignRole('user');
        return redirect()->back()->with('succes', 'user created');
    }

    public function editeRole(Request $request, User $user){

        if ($user->hasRole($request->role)) {
            return back()->with("message", 'role exists');
        }else{
            $user->assignRole($request->role);
        return back()->with("message", 'role assigned');
        }
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
