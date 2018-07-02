<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Persona;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contUser = User::all()->count();
        $contPersona = Persona::all()->count();
        return view('home', compact('contUser', 'contPersona'));
    }
}
