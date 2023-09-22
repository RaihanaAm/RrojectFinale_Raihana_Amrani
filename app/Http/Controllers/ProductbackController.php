<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductbackController extends Controller
{
    public function product()
    {
        $products = Product::all();
        $categories = Categorie::all();
        return view("Backend.components.product", compact('products', 'categories'));
    }
    // ** create 
    public function store(Request $request)
    {
        request()->validate([
            "name" => ["required"],
            'desc' => ["required"],
            "img" => "image|mimes:png,jpg,jpeg,gif|max:2048",
            "qnt" => ["required"],
            'price' => ["required"],
            'categorie_id' => ["required"],
        ]);

        $data = [
            "name" => $request->name,
            "desc"  => $request->desc,
            "img" => $request->file("img")->hashName(),
            "qnt" => $request->qnt,
            "price"  => $request->price,
            "categorie_id" => $request->categorie_id,
            "user_id" => auth()->user()->id,
        ];
        Product::create($data);

        return redirect()->back()->with("success", "Product created ");
    }
// ***update
    public function update(Request $request, Product $product)
    {
        request()->validate([
            "name" => ["required"],
            'desc' => ["required"],
            "img" => "image|mimes:png,jpg,jpeg,gif|max:2048",
            "qnt" => ["required"],
            'price' => ["required"],
            'categorie_id' => ["required"],
            // 'user_id',
        ]);

        $data = [
            "name" => $request->name,
            "desc"  => $request->desc,
            "qnt" => $request->qnt,
            "price"  => $request->price,
            "categorie_id" => $request->categorie_id,
            "user_id" => auth()->user()->id,
        ];

        if ($request->file('img') != null) {
            //!Update the image
            $request->file("img")->storePublicly('/', 'public');
            $data['img'] = $request->file("img")->hashName();
        }
        $product->update($data);
        return redirect()->back()->with("success", "Product été modifié");
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with("warning", "product deleted");
    }

    public function Master()
    {
        $products = Product::all();
        $categories = Categorie::all();

        return view('Backend.components.webmasterProduct', compact('products', 'categories'));
    }


}
