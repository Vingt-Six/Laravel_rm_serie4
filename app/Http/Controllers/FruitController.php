<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    function index(){
        $fruits = Fruit::all();
        return view('pages.frutis', compact('fruits'));
    }
}
