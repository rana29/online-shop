<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logo;
use App\user;
use App\mission;
use App\slider;
use App\product;
use App\catagory;
use App\brand;
use App\size;
use App\color;
use App\contact;
use App\vision;
use Session;
use Cart;

class cartcontroller extends Controller {

	public function store(Request $request){


          $request->validate([
          'size_id'=>'required',
          'color_id'=>'required',
         ]);

          $product=product::where('id',$request->id)->first();
          $size=size::where('id',$request->size_id)->first();
          $color=color::where('id',$request->color_id)->first();
          //return $product;


       //dd($request->all());
          Cart::add([
           'id'=>$product->id,
           'name'=>$product->product_name,
           'price'=>$product->product_price,
           'qty'=>$request->qty,
           'weight'=>550,

           'options'=>[
           'size_id'=>$request->size_id,
           'size_name'=>$size->size_name,
           'color_id'=>$request->color_id,
           'color_name'=>$color->color_name,
           'image'=>$product->image,
           ],

          ]);

          return redirect()->route('cart.manage');
	}

	public function manage(){

		$contact=contact::first();
		return view('frontend.single_page.shopping_cart',compact('contact'));
	}

	public function update(Request $request){
		Cart::update($request->rowId,$request->qty);
		return redirect()->route('cart');



	}

	public function delete($rowId){
		Cart::remove($rowId);
		return redirect()->route('cart');



	}
    
}