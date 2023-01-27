<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodeLab
{
    public function handle(Request $request, Closure $next)
    {
        // dd($request);
        // dd(Auth::user()->role);

        if(Auth::user()->role != 'admin') {
            return redirect('dashboard')->with(['authMessage' => "You donn't have permission for these access. You are not admin account."]);
            // return abort(404);
        }
        return $next($request);
        // echo "<h1>This is testing from CodeLab middleware</h1>";
    }
}
