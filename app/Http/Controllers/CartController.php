<?php

namespace App\Http\Controllers;

use App\Models\UserProducts;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function Cart(){
        $userProducts =UserProducts::all();
        return view("Frontend.cart",compact('userProducts'));
    }
}
