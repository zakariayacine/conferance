<?php

namespace App\Http\Controllers;
use auth;
use App\Models\Names;
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
     public function name()
    {
        return view('name');
    }
     public function namesave(Request $request)
    {
        if (isset($request)) {
         $validatedData = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ]);
        $name = new Names();
        $name->firstname = $request->input('firstname');
        $name->lastname = $request->input('lastname');
        $name->email = $request->input('email');
        $name->phone = $request->input('phone');
        $name->user_id = Auth::id();
        $name->save();
        $_COOKIE['username'] = $request->input('firstname').' '.$request->input('lastname');
        $user = $user = Auth::user();
        $jitsi = $user["jitsi-link"];
            return view('home', compact('jitsi'));
        }
        return view('name');

    }

}
