<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function Product()
    {
        $products = Products::all();
        $allcate = Categories::all();

        $maxCategoryId = $products->max('category_id');

        $category = Categories::where('id', $maxCategoryId)->first();

        return view('Products', compact('products', 'category', 'allcate'));
    }




public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'code' => 'required',
        'qty' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
    ]);

    $userId = session('id');

    if (!$userId) {
        return redirect('/')->with('error', 'Please login first');
    }

    Products::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'code' => $request->code,
        'qty' => $request->qty,
        'create_uid' => $userId,
        'update_uid' => null,
    ]);

    return redirect()->back()->with('success', 'Product created successfully');
}
}
