<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(Request $request) {
        if (str_contains($request->mail, "@")) {
            return view('pages.back.adminvalidation');
        }
        return view('pages.back.admin');
    }
}
