<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\size;
use Session;
use Str;


class SizeController extends Controller
{
     public function create(){

   	  return view('backend.size.create_size');
    }

   public function store(Request $request){

   	//return $request;

          $request->validate([
          'size_name'=>'required|unique:sizes,size_name|min:4',
         ]);

    	 size::create([
        	'size_name'=>$request->size_name,
        
        	]);

    	
    		Session::flash('success', 'size has added successfully');
   	        return back();
    }



     public function manage(){

     $size=size::orderBy('id','asc')->get();

      //return $size;
   	  return view('backend.size.manage_size',compact('size'));
    }


    public function active($id,$status){

    $size=size::find($id);
    $size->status=$status;
    $size->save();
    Session::flash('success', 'size has added successfully');
    return back();

   }

     public function edit($id){

     $size=size::find($id);
     return view('backend.size.edit_size',compact('size'));
    }




     public function update(request $request,$id){

      //return $request;
        $request->validate([

          'size_name'=>'required|unique:sizes,size_name|min:3',
        ]);
       
        $update=size::find($request->id);
       //return $up;
        $update->size_name=$request->size_name;
      
        $update->save();
        Session::flash('success', 'size has update successfully');
        return redirect()->route('size.manage');
   }


    public function delete($id){
      $delete=size::find($id);
      $delete->delete();
      Session::flash('success', 'size has delete successfully');
      return back();
  }
}
