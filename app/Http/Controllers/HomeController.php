<?php

namespace App\Http\Controllers;
use Alert;

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
        $this->middleware('verified');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        alert()->success('Berhasil Login','Selamat kamu berhasil login')->autoclose(3000);
        return view('home');
    }
}
