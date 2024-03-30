<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getCategories()
    {
        //* LA funcion All() es el SELECT * FROM category
        return response()->json(category::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function newCategory(Request $request)
    {
        //*LA funcion create es el INSERT INTO category
        $category =  category::create($request->all());
        return response()->json($category, 200);
    }

    /**
     * Display the specified resource.
     */
    public function getCategory($id)
    {
        //
        $category =  category::find($id);
        if(is_null($category)){
            return response()->json(['message' => 'Nel no hay!'], 404);
        }
        return response()->json($category , 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteCategory($id)
    {
        //
        $category =  category::find($id);
        if(is_null($category)){
            return response()->json(['message' => 'Nel no hay!'], 404);
        }
        $category->delete();
        return response()->json(['message' => 'Categoria eliminada!'], 200);
    }
}
