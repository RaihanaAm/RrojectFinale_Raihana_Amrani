<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserProducts;
use Illuminate\Http\Request;

class userProductsController extends Controller
{

        public function store(Product $product)
        {
            $exist = UserProducts::where("user_id", auth()->user()->id)->where("product_id", $product->id)->first();
            if ($exist) {
                $exist->qnt += 1;
                $exist->save();
            } else {
                UserProducts::create([
                    "user_id" => auth()->user()->id,
                    "product_id" => $product->id,
                    "qnt" => 1,
                ]);
            }
            return redirect()->back()->with('succes','add with success');
        }
}
