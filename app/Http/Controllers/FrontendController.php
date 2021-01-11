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

class FrontendController extends Controller
{
    public function index(){
      $contact=contact::first();
      $slider=slider::all();
      $catagory=product::select('catagory_id')->GroupBy('catagory_id')->get();
      $brand=product::select('brand_id')->GroupBy('brand_id')->get();
      //return $catagory;
      $products=product::orderBy('id','desc')->paginate(12);


    	return view('frontend.home',compact('contact','slider','catagory','brand','products'));
    }

    public function about(){
    $contact=contact::first();

   	return view('frontend.single_page.about',compact('contact'));
   }


    public function contact(){
    $contact=contact::first();

   	return view('frontend.single_page.contact',compact('contact'));
   }

     public function cart(){
    $contact=contact::first();

   	return view('frontend.single_page.shopping_cart',compact('contact'));
   }

    public function product(){
      $contact=contact::first();
      
      $catagory=product::select('catagory_id')->GroupBy('catagory_id')->get();
      $brand=product::select('brand_id')->GroupBy('brand_id')->get();
      //return $catagory;
      $products=product::orderBy('id','desc')->paginate(12);
      return view('frontend.single_page.product',compact('contact','catagory','brand','products'));
   }


     public function catagory($id){
    //$contact=contact::first();

      $contact=contact::first();
      
      $catagory=product::select('catagory_id')->GroupBy('catagory_id')->get();
      
      $brand=product::select('brand_id')->GroupBy('brand_id')->get();
      //return $catagory;
      $products=product::where('catagory_id',$id)->orderBy('id','desc')->get();
      return view('frontend.single_page.catagory',compact('contact','catagory','brand','products'));

    
   }


     public function brand($id){
    //$contact=contact::first();

      $contact=contact::first();
      
      $catagory=product::select('catagory_id')->GroupBy('catagory_id')->get();
      $brand=product::select('brand_id')->GroupBy('brand_id')->get();
      //return $catagory;
      $products=product::where('brand_id',$id)->orderBy('id','desc')->get();
      return view('frontend.single_page.brand',compact('contact','catagory','brand','products'));

    
   }



    public function detils($slug){
      $contact=contact::first();
      
      $catagory=product::select('catagory_id')->GroupBy('catagory_id')->get();
      $brand=product::select('brand_id')->GroupBy('brand_id')->get();
      //$size=size::orderBy('id','asc')->get();
      //return $catagory;
      $products=product::where('slug',$slug)->first();
      //return $products;
      return view('frontend.single_page.product_detils',compact('contact','catagory','brand','products',));
   }
}
