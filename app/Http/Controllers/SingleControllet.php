<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SingleControllet extends Controller
{
    public function singlepage(Product $product){

        return view('Frontend.singlePrduct',compact('product'));
    }
}
