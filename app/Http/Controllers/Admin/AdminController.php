<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Tickets;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function usersmngr()
    {
        $users = User::all();
        return view('usersmngr.index')->with('users', $users);
    }

    public function tickets()
    {
        $tickets = Tickets::all();
        return view('tickets.index')->with('tickets', $tickets);
    }
}
