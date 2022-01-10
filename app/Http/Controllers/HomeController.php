<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user() != null && auth()->user()->role == 1){
            return view('admin');
        }
        if(auth()->user() != null && auth()->user()->role == 2){
            return view('artist');
        }
        if(auth()->user() != null && auth()->user()->role == 3){
            return view('main2');
        }
        
        
    }
}
