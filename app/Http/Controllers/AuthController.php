<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('form');
    }

    public function process(Request $request) {
        $fn = $request['fn'];
        $ln = $request['ln'];
        return view('welcome2', compact('fn', 'ln'));
    }
}
