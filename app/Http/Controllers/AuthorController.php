<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\contact;
use App\customer;
use DB;
use Mail;
use Auth;

class AuthorController extends Controller
{
    public function dashbord(){

         $contact=contact::first();
         $profile=Auth::user();
         //return $profile;
    	return view('frontend.customer.customer_dashbord',compact('contact','profile'));
    }
}
