<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * The method returns a view with a single form to create a new session.
     */
    public function index()
    {
        return view();
    }
    protected $colours = [
        'pink',
        'antiquewhite',
        'lavender',
        'lightcyan',
        'thistle',
        'tomato',
        '#FFF7B1',
        '#AFCFFF',
        '#B4F7E3',
        '#c2e184',
        '#ffe699',
        '#ffb3ff',
        '#9999ff',
        '#6699ff',
        '#40bf80',
        '#c68c53',
        '#ff944d'
    ];
    
    /**
     * method receives user' data, creates a token and later
     * a new session with said user as an admin.
     * @param Request $request
     */
    public function create(Request $request)
    {
        $colour = rand(0, $this->colours[count($this->colours - 1)]);
    }

    /**
     *
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($token)
    {
        // calls to the db for a session data
        $session = [];

        // depending on the stage of the session
        // the method will load a responding view
        if (true) {
            return view('stageone', compact('session'));
        }
        if (false) {
            return view('stagetwo', compact('session'));
        }
        if (false) {
            return view('stagethree', compact('session'));
        }
    }
}
