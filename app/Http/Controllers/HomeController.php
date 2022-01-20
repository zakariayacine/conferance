<?php

namespace App\Http\Controllers;
use auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $user = $user = Auth::user();
        $jitsi = $user["jitsi-link"];
        return view('home', compact('jitsi'));
    }
}
