<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'admin') {
                return $next($request);
            } elseif (Auth::user()->usertype == 'user') {
                return redirect()->route('home');
            }
        }

        return redirect()->route('admin.dashboard');
    }
    public function index()
{
    $userCount = User::count();
    return view('nazwa-widoku', compact('userCount'));
}
}