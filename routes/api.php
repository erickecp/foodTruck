<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
..######.....###....########.########..######....#######..########..##....##
.##....##...##.##......##....##.......##....##..##.....##.##.....##..##..##.
.##........##...##.....##....##.......##........##.....##.##.....##...####..
.##.......##.....##....##....######...##...####.##.....##.########.....##...
.##.......#########....##....##.......##....##..##.....##.##...##......##...
.##....##.##.....##....##....##.......##....##..##.....##.##....##.....##...
..######..##.....##....##....########..######....#######..##.....##....##...
*/
Route::controller(CategoryController::class)->group(
function(){
    //* Ruta para crear una nueva categoria
    Route::post('nuevaCategoria', 'newCategory');
    Route::get('categorias','getCategories');
    Route::get('categoria/{id}', 'getCategory');
    Route::put('editarCategoria','putCategory');
    Route::delete('delCategoria/{id}','deleteCategory');
}
);

/*
.########..#######...#######..########.
.##.......##.....##.##.....##.##.....##
.##.......##.....##.##.....##.##.....##
.######...##.....##.##.....##.##.....##
.##.......##.....##.##.....##.##.....##
.##.......##.....##.##.....##.##.....##
.##........#######...#######..########.
*/


Route::controller(FoodController::class)->group(
    function(){
        //! Ruta para crear una nueva comida
        Route::post('nuevaFood', 'newFood');
        //! Rura para obtener todas las comidas
        Route::get('foods','getComidas');
        Route::get('food/{id}', 'getFood');
        Route::put('editarFood/{id}','putFood');
        Route::delete('delFood/{id}','deleteFood');
    }
    );
