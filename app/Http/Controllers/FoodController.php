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
     * Store a newly created resource in storage.
     */
    public function newFood(Request $request)
    {
        $food =  food::create($request->all());
        return response()->json($food, 200);
    }
}
