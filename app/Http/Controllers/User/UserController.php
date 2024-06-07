<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trasy;

class UserController extends Controller
{
    public function index()
    {
        $trasy = Trasy::all();
        return view('home', compact('trasy'));
    }
}
