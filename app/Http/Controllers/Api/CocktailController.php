<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{
    public function index() {  //Restituisce le risorse associate
        $cocktails = Cocktail::with("type")->get();
        return response()->json([
            "success" => true,
            "results" => $cocktails
        ]);
    }
}
