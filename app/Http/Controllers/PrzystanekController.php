<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrzystanekController extends Controller
{
    public function index()
    {
        return view('przystanki.index');
    }
}
