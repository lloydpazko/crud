<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product_model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class ProductController extends Controller
{
    /* URL links route */
    public function Insert()
    {
        return view('insert');
    }
    public function ProductList()
    {
        return view('productlist');
    }
    public function store(Request $request):RedirectResponse{
        $request->validate([
            'name' => ['required','string','max:255'],
            'price' => ['required','numeric','max:255'],
            'quantity' => ['required','numeric','max:255'],
            'description' => ['required','string','max:255']
        ]);
        $product = new Product_model();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('ProductList');
    }
}
