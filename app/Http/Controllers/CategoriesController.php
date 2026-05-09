<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Services\CategoryServices;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(private CategoryServices $categoryServices)
    {
        $this->categoryServices = $categoryServices;
    }


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

        // Categories::create([
        //     'name' => $request->name,
        // ]);

        // return redirect()->route('categories')->with('success', 'Category created successfully.');

        $data = $request->all();

        $this->categoryServices->create($data);

        return redirect()->back()->with('success', 'Categories create successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        // $category = Categories::findOrFail($id);
        // $category->update([
        //     'name' => $request->name,
        // ]);

        // return redirect()->route('categories')->with('success', 'Category updated successfully.');

        $data = $request->all();

        $this->categoryServices->update($id, $data);

        return redirect()->back()->with('success', 'Category update successfully');

    }

    public function destroy($id)
    {
        // $category = Categories::findOrFail($id);
        // $category->delete();

        // return redirect()->route('categories')->with('success', 'Category deleted successfully.');


        $this->categoryServices->delete($id);

        return redirect()->back()->with('success', 'Category delete successfully');
    }
}
