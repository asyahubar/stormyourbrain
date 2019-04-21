<?php

namespace App\Http\Controllers;

use App\Invite;
use App\Notifications\InviteNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class InviteController extends Controller
{
    /**
     * processes the form submission and sends the invite by email
     */
    public function invite(Request $request)
    {
        do {
            $token = Str::random();
        } while (Invite::where('token', $token)->first());

        $invite = Invite::create([
            'email' => $request->get('email'),
            'token' => $token
        ]);

        Notification::send($request->get('email'), InviteNotification::toMail($token));

    }

    /**
     * the route from the invite email
     * processes the token from the URL
     * if the email is in the system, redirect to log in page
     * if not, redirect to register page
     * @param $token
     */
    public function accept($token)
    {
        //
    }
}
