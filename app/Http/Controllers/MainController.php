<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexa() {
        return view('indexa');
    }

    public function kingdoms() {
        return view('kingdoms');
    }
}

