<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;

class LegumeController extends Controller
{
    function index(){
        $legumes = Legume::all();
        return view('pages.legumes', compact('legumes'));
    }
}
