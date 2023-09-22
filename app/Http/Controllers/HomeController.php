<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $products =Product::all();
        $lastFourElements = Product::all()->slice(-4);
        $randoms = $products->shuffle()->take(4);
        return view("welcome",compact("products",'lastFourElements','randoms'));
    }
}
