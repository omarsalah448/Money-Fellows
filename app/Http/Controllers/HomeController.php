<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class HomeController extends Controller
{
    public function index()
    {


        try {
            $role = Auth::user()->role;
    
            if($role == 1)
            {
                return view('admin.stat');
            }
            else
            {
                return redirect()->route('user.index');
            }
        } catch (Throwable $e) {
            abort(403, 'Unauthorized.');
        }
    }
}
