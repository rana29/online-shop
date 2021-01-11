<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use Session;
use Str;

class Catagorycontroller extends Controller
{
    public function create(){

   	  return view('backend.catagory.create_catagory');
    }

   public function store(Request $request){

   	//return $request;

          $request->validate([
          'catagory_name'=>'required|unique:catagories,catagory_name|min:4',
         ]);

    	 Catagory::create([
        	'catagory_name'=>$request->catagory_name,
        	'catagory_slug'=>str::slug($request->catagory_name),
        	]);

    	//return $data;
    		Session::flash('success', 'Catagory has added successfully');
   	    return back();
    }



     public function manage(){

      $catagory=Catagory::orderBy('id','asc')->get();

      //return $catagory;
   	  return view('backend.catagory.manage_catagory',compact('catagory'));
    }


    public function active($id,$status){

    $Catagory=Catagory::find($id);
    $Catagory->status=$status;
    $Catagory->save();
    Session::flash('success', 'Catagory has added successfully');
    return back();

   }

     public function edit($id){

     $catagory=Catagory::find($id);
     return view('backend.catagory.edit_catagory',compact('catagory'));
    }




     public function update(request $request,$id){

      //return $request;
        $request->validate([

          'catagory_name'=>'required|unique:catagories,catagory_name|min:3',
        ]);
       
        $update=catagory::find($request->id);
       //return $up;
        $update->catagory_name=$request->catagory_name;
      
        $update->save();
        Session::flash('success', 'catagory has update successfully');
        return redirect()->route('catagory.manage');
   }


    public function delete($id){

      $delete=catagory::find($id);
      $delete->delete();
      Session::flash('success', 'catagory has delete successfully');
      return back();
  }


}
