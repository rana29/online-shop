<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\customer;
use App\user;
use App\shipping;
use App\payment;
use App\order;
use App\order_detil;
use DB;
use Mail;
use Auth;
use Session;

class customerController extends Controller
{
    public function login(){

    	 $contact=contact::first();

    	return view('frontend.customer.login',compact('contact'));
    }


     public function signup(){

     $contact=contact::first();

    	return view('frontend.customer.signup',compact('contact'));
    }


     public function store(Request $request){

    	 $contact=contact::first();

    	 $customer=new customer();

          $request->validate([
          'name'=>'required|min:4',
          /*'pass'=>'required_with:cpass|same: cpass',*/
         ]);


            $code=rand(000,9999);

        	$customer->name=$request->name;
        	$customer->email=$request->email;
        	
        	$customer->mobile=$request->mobile;
        
        	$customer->code=$code;

        	$customer->save();


     $data=array(
        
        'email'=>$request->email,
        'name'=>$request->name,
        'code'=>$code,
        
      );

      Mail::send('frontend.single_page.mail',$data, function($message)use($data){
        $message->from('ranamasud@gmail.com')
                 ->to($data['email'])
                ->subject('Thanks');


       });

    	return redirect()->route('customer.verify');
    }


   
     public function verify(){

    	 $contact=contact::first();

    	return view('frontend.customer.verify',compact('contact'));
    }



    public function verify_code(request $request){

    	 //$contact=contact::first();
    	
     $check=customer::where('email',$request->email)->where('code',$request->code)->first();

     if($check){

     $check->status=1;
     $check->save();	
     return redirect()->route('customer.login');


     }

     else{

     	return redirect()->back()->with('error','sorry do not match');

     }
    	
    }


     public function edit_profile(){

         $contact=contact::first();
         $profile=user::find(Auth::user()->id);

         return view('frontend.customer.edit_customer',compact('contact','profile'));
    
}


   public function update_profile(Request $request){

         $profile=user::find(Auth::user()->id);
         $contact=contact::first();
         $pro=user::find(Auth::user()->id);

         $pro->name=$request->name;
         $pro->save();

         return view('frontend.customer.edit_customer',compact('profile','contact'));
    
}


public function checkout(){

$contact=contact::first();
return view('frontend.customer.checkout_customer',compact('contact'));

    
}


public function checkout_store(Request $request){

$contact=contact::first();


$shipping=new shipping();
$shipping->user_id=Auth::user()->id;
$shipping->name=$request->name;
$shipping->email=$request->email;
$shipping->mobile=$request->mobile;
$shipping->address=$request->address;
$shipping->save();
Session::put('shipping_id',$shipping->id);// a id ta amara order a plae korbo
return redirect()->route('customer.payment');

    
}

public function payment(){

$contact=contact::first();
return view('frontend.customer.payment_customer',compact('contact'));

    
}

public function payment_store(Request $request){

$contact=contact::first();



return view('frontend.customer.payment_store',compact('contact'));

    
}

public function shipping(){

$contact=contact::first();
return view('frontend.customer.shipping_customer',compact('contact'));

    
}






public function payment_store(Request $request){

    DB::transaction(function() use($request) {

     $payment=new payment();
     $payment->payment_method=$request->payment_method;   
     $payment->transtion_id=$request->transtion_id;   
    
    
    $payment->save();

    $order=new order();
    $order->user_id=Auth::user()->id;
    $order->shipping_id=Session::get('shipping_id');//a id ta shipping a store korae rakha
    $order->payment_id=$payment->id;//oporae payment thakae
    $data=order::orderBy('id','desc')->first();
    if($data==null){
        $first='0';
        $order_no=$first+1;
    }else{
        $data=order::orderBy('id','desc')->first()->order_no;
        $order_no=$data+1;
    }

    $order->order_no=$order_no;
    $order->order_total=$request->order_total;
    $order->status=0;
    $order->save();

    )}

}





}
