<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

          $category = Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

         return redirect('/categories')->with('success', 'Category created successfully');
    }

    public function index(){
   $categories = Category::whereBetween('id', [4, 7])->get();

    return view('categories.index', ['categories' => $categories]);
  }

    public function update($id)
    {
        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();

        return redirect('/categories')->with('success', 'Категорія оновлена!');
    }



    public function destroy($id)
    {

        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('/categories')->with('success', 'Категорія видалена!');
    }
}
