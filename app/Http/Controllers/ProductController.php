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
        // $contacts = Contact::all();
        
        return view('insert');
    }
    public function ProductList()
    {
         $data['products'] = Product_model::orderBy('id', 'asc')->paginate(5);
        return view('productlist' $data); 
    }
    public function store(Request $request):RedirectResponse{
        $request->validate([
            'name' => ['required','string','max:255'],
            'price' => ['required','string','max:255'],
            'quantity' => ['required','string','max:255'],
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
    public function show(Product_model $product)
    {
        return redirect('ProductList.show');
    }
    public function edit(Product_model $product, $id)
    {
        $product = Product_model::find($id);
        return view('ProductList.edit');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'price' => ['required','numeric','max:255'],
            'quantity' => ['required','numeric','max:255'],
            'description' => ['required','string','max:255']
        ]);
        $product = Product_model::find($id);
        $product -> name = $request->name;
        $product -> price = $request->price;
        $product -> quantity = $request->quantity;
        $product -> description = $request->description;
        $product -> save();
        return redirect()->route('ProductList');
    }

    public function destroy(Product_model $product, $id)
    {
        $product = Product_model::find($id);
        $product->delete();
        return redirect()->route('ProductList');
    }
}
