<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class BackFruitController extends Controller
{
    function index() {
        $fruits = Fruit::all();
        return view('pages.back.backfruit', compact('fruits'));
    }

    function create() {
        return view('pages.back.addfruit');
    }

    function store(Request $request) {
        $store = new Fruit();
        $store -> name = $request -> name;
        $store -> quantity = $request -> quantity;
        $store -> save();
        return redirect('/administration/fruits');
    }
}
