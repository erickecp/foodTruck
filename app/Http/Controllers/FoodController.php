<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getComidas()
    {
        return response()->json(food::all(), 200);
    }


    public function getFood($id)
    {
        //
        $food =  food::find($id);
        if(is_null($food)){
            return response()->json(['message' => 'Nel no hay!'], 404);
        }
        return response()->json($food , 200);
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
    public function newFood(Request $request)
    {
        $food =  food::create($request->all());
        return response()->json($food, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(food $food)
    {
        //
    }
}
