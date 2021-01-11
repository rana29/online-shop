<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catagory;
use App\brand;
use App\color;
use App\size;
use App\ProductSize;
use App\ProductColor;
use App\ProductSubimage;
use Session;
use Str;
use Image;


class ProductController extends Controller
{
    public function create(){
     $catagory=catagory::orderBy('id','asc')->get();
     $brand=brand::orderBy('id','asc')->get();
     $color=color::orderBy('id','asc')->get();
     $size=size::orderBy('id','asc')->get();
	
     return view('backend.product.create_product',compact('catagory','brand','color','size'));
    }


   



     public function store(Request $request){

   	//return $request; 

     	$file=[];
      
    
     	
     	if ($request->hasfile('image')){
      
     	foreach($request->file('image') as $image){


/* echo $image;
 exit;
*/
     	$rand=rand(100,1000);
     	$ex=$image->getClientOriginalExtension();
      //return $ex;
     	$name=$rand.'.'.$ex;
      $location=public_path('product/');
     	$upload=$image->move($location,$name);

     	/*Image::make($image)
     
     	->save($location);*/

        $file[]=$name;
     }
} 

/*
      $col=[];
      $color=$request->color_id;
      foreach($color as $color){
       $col[]=$color;
      }*/
        
          $product=new product();

          $request->validate([
          'product_name'=>'required|unique:products,product_name|min:4',
         ]);


         

        	$product->product_name=$request->product_name;
          $product->slug=str::slug($request->product_name);
        	$product->catagory_id=$request->catagory_id;
        	$product->brand_id=$request->brand_id;
        
          $product->color_id=$request->color_id;
          $product->size_id=$request->size_id;
        	$product->product_price=$request->product_price;
        	$product->long_desc=$request->long_desc;
        	$product->short_desc=$request->short_desc;
        	$product->image=json_encode($file);
          //$product->color_id=json_encode($col);
          if($product->save()){

          }else{
            Session::flash('success', 'product add  unsuccessfull');
          }    	
    		  Session::flash('success', 'product has added successfully');
   	      return back();
    }


  



     public function manage(){

     $product=product::orderBy('id','asc')->get();
     $catagory=catagory::orderBy('id','asc')->get();
     $brand=brand::orderBy('id','asc')->get();
     $color=brand::orderBy('id','asc')->get();
     $size=size::orderBy('id','asc')->get();

      //return $product;
   	  return view('backend.product.manage_product',compact('product','catagory','brand','color','size'));
    }


    public function active($id,$status){

    $product=product::find($id);
    $product->status=$status;
    $product->save();
    Session::flash('success', 'product has added successfully');
    return back();

   }

     public function edit($id){

          $product=product::find($id);
          $catagory=catagory::orderBy('id','asc')->get();
          $brand=brand::orderBy('id','asc')->get();
          $color=color::orderBy('id','asc')->get();
          $size=size::orderBy('id','asc')->get();
     return view('backend.product.edit_product',compact('product','catagory','brand','color','size'));
    }




     public function update(request $request,$id){

     	 

      $update=product::find($id);
      $image=json_decode($update->image);
      if(file_exists('product/'.$update->image)){
      foreach($image as $file){
      unlink(public_path('product/'.$file));
    }

      }

      $update->delete();

      //product::where('$product->id',$id)->delete();

   
      $file=[];
      
    
      
      if ($request->hasfile('image')){
      
      foreach($request->file('image') as $image){


/* echo $image;
 exit;
*/
      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      //return $ex;
      $name=$rand.'.'.$ex;
      $location=public_path('product/');
      $upload=$image->move($location,$name);

      /*Image::make($image)
     
      ->save($location);*/

        $file[]=$name;
       
     }
} 
       

          $request->validate([
          'product_name'=>'required|unique:products,product_name|min:2',
         ]);


           

        	$update->product_name=$request->product_name;
        	$update->catagory_id=$request->catagory_id;
        	$update->brand_id=$request->brand_id;
        	$update->product_price=$request->product_price;
        	$update->long_desc=$request->long_desc;
        	$update->short_desc=$request->short_desc;
          $update->image=json_encode($file);
        	
          if($update->save() ){

      
          Session::flash('success', 'product has added successfully');
          return back();
          }else{
            Session::flash('success', 'product has not added successfully');
          }
              	
    		 
   

}

      public function delete($id){
      $delete=product::find($id);
      if(file_exists('product/'.$delete->image)){
      $image=json_decode($delete->image);
      foreach($image as $file){
      unlink(public_path('product/'.$file));

      }
      
   }
   
      $delete->delete();
      Session::flash('success', 'product has delete successfully');
      return back();
  }


      public function detil($id){
          $product=product::find($id);
          $catagory=catagory::orderBy('id','asc')->get();
          $brand=brand::orderBy('id','asc')->get();
          $color=color::orderBy('id','asc')->get();
          $size=size::orderBy('id','asc')->get();
          return view('backend.product.detil_product',compact('product','catagory','brand','color','size'));
  }
}
