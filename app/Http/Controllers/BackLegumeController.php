<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;

class BackLegumeController extends Controller
{
    function index() {
        $legumes = Legume::all();
        return view('pages.back.backlegume', compact('legumes'));
    }

    function create() {
        return view('pages.back.addlegume');
    }

    function store(Request $request) {
        $store = new Legume();
        $store -> name = $request -> name;
        $store -> quantity = $request -> quantity;
        $store -> save();
        return redirect('/administration/legumes');
    }
}
