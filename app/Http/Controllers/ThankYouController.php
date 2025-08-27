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
         if(!$request->email){
            return redirect()->away('https://chat.whatsapp.com/CnRl6vTjpLO2xXr1hdwpCX?mode=ems_copy_c');
         }
        Mail::to($request->email)->send(new ThankyouMail($body));
        Session::put('successMessage', 'Account created. Thanks');
       return redirect()->away('https://chat.whatsapp.com/CnRl6vTjpLO2xXr1hdwpCX?mode=ems_copy_c');

   }
}
