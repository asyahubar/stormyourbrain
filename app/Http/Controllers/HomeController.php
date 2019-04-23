<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Should pass to the view data on past and current sessions.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            $sessions = $this->loadSessions();
            dd($sessions);
            return view('home');
        } else {
            // The user isn't logged in...
            return view('login');
        }
    }

    /**
     * Loads a the user's sessions
     */
    protected function loadSessions() {
        $sessions = Session::find(1);
//        Carbon::createFromTimestampMs(1, 'Europe/London')->format('Y-m-d\TH:i:s.uP T');
        return $sessions;
    }
}
