<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deals;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deals = Deals::orderBy('updated_at', 'DESC')->get();
        return view('welcome', compact('deals'));
    }
}
