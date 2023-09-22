<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function categorie(){
        $products =Product::all();
        return view("Frontend.categorie",compact('products'));
    }
}
