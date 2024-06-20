<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Personel;
use App\Models\Stacje;
use App\Models\Trasy;
use App\Models\Relacje;
use App\Models\Tickets;
use App\Models\Usersmngr;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return $this->dashboard();
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

    public function dashboard()
{
    // Liczba wszystkich użytkowników
    $userCount = User::count();

    // Dane dla wykresu logowań użytkowników
    $dates = collect([]);
    for ($i = 6; $i >= 0; $i--) { // Zmiana z 5 na 6 dla 7 dni
        $date = now()->subDays($i)->format('Y-m-d');
        $loginsPerDay[$date] = User::whereDate('last_login', $date)->sum('total_logins');
    }

    // Pobranie 5 ostatnio zalogowanych użytkowników
    $recentUsers = User::orderBy('last_login', 'desc')->take(5)->get();

    // Dodatkowe statystyki
    $personnelCount = Personel::count();
    $stationCount = Stacje::count();
    $routeCount = Trasy::count();
    $relationCount = Relacje::count();

    return view('admin.dashboard', compact('userCount', 'loginsPerDay', 'recentUsers', 'personnelCount', 'stationCount', 'routeCount', 'relationCount'));
}
}