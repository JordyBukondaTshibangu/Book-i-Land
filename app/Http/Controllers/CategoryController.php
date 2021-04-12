<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();

        return response()->json([
            'Message' => 'Categories successfully retrieved',
            'Category' => $categories,
        ], 200); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);

        return response()->json([
            'Message' => 'Category successfully Created',
            'Category' => $category,
        ],202);
    }

    public function show(Category $id)
    {
        $category = Category::findOrFail($id);

        return response()->json([
            'Message' => 'Category successfully retrieved',
            'Category' => $category,
        ],200);  
    }

    public function update(Request $request, Category $category)
    {
        $category_id =  $category->id;
        $category = Category::where('id', $category_id)->update(['name' => $request->name]);
        $updated_category = Category::findOrFail($category_id);

        return response()->json([
            'Message' => 'Category successfully Updated',
            'Category' => $updated_category,
        ],204);
        
    }
    
    public function destroy(Category $category)
    {
        $category_id =  $category->id;
        $category = Category::findOrFail($category_id);
        $category->delete();

        return response()->json([
            'Message' => 'Category successfully deleted',
            'Category' => $category,
        ],200);
    }
}
