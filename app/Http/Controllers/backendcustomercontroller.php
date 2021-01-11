<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use Carbon;
use Session;

class backendcustomercontroller extends Controller
{
     public function manage(){
    	$customer=customer::where('type','customer')->where('status',1)->get();

    	return view('backend.customer.manage_customer',compact('customer'));
    }


     public function add(){
    	$customer=customer::where('type','customer')->where('status',0)->get();

    	return view('backend.customer.add_customer',compact('customer'));
    }

     public function delete(Request $request){

      $delete=customer::find($request->id);
      $delete->delete();
      Session::flash('success', 'customer has delete successfully');
      return back();
  }


}
