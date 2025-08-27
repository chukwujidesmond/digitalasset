<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ThankyouMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;

class ThankYouController extends Controller
{
   public function sendFeedback(Request $request)
   {
        $body = $request->all();

        Mail::to($request->email)->send(new ThankyouMail($body));
        Session::put('successMessage', 'Account created. Thanks');
        return redirect()->back();
   }
}
