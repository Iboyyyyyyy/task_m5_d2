<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function Categories()
    {
        $category = Categories::all();
        return view('Categories', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Categories::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories')->with('success', 'Category created successfully.');
    }
}
