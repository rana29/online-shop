<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\color;
use Session;
use Str;

class ColorController extends Controller
{
     public function create(){

   	  return view('backend.color.create_color');
    }

   public function store(Request $request){

   	//return $request;

          $request->validate([
          'color_name'=>'required|unique:colors,color_name|min:4',
         ]);

    	 color::create([
        	'color_name'=>$request->color_name,
        	
        	]);

    	
    		Session::flash('success', 'color has added successfully');
   	        return back();
    }



     public function manage(){

     $color=color::orderBy('id','asc')->get();

      //return $color;
   	  return view('backend.color.manage_color',compact('color'));
    }


    public function active($id,$status){

    $color=color::find($id);
    $color->status=$status;
    $color->save();
    Session::flash('success', 'color has added successfully');
    return back();

   }

     public function edit($id){

     $color=color::find($id);
     return view('backend.color.edit_color',compact('color'));
    }




     public function update(request $request,$id){

      //return $request;
        $request->validate([

          'color_name'=>'required|unique:colors,color_name|min:3',
        ]);
       
        $update=color::find($request->id);
       //return $up;
        $update->color_name=$request->color_name;
      
        $update->save();
        Session::flash('success', 'color has update successfully');
        return redirect()->route('color.manage');
   }


    public function delete($id){
      $delete=color::find($id);
      $delete->delete();
      Session::flash('success', 'color has delete successfully');
      return back();
  }
}
