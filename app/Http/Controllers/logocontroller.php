<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logo;
use Auth;
use Session;
use Hash;
use Image;

class logocontroller extends Controller
{


    public function view(){
    	$count=logo::count();
    	//return $count;
    	$data=logo::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.logo.view_logo',compact('data','count'));
    }


     public function create(){
    	
    	//return $data;
    	return view('backend.logo.create_logo');
    }


     public function store(Request $request){

     	//return $request;

         
     	  $log=new logo();

     	 $request->validate([
          'logo_name'=>'required|unique:users,name|min:3',
         ]);

    
      if ($request->hasfile('logo')){

      $image=$request->file('logo');
    

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('logo/');
      $upload=$image->move($location,$name);
      
    }
        
    	
    	 $log->logo_name=$request->logo_name;
    	 $log->logo=$name;

         $log->save();
    	
    	//return $data;
    		Session::flash('success', 'User has added successfully');
   	        return back();
    }

    public function edit($id){

    	$edit=User::find($id);

    	//return $data;

    	return view('backend.user.user_edit',compact('edit'));

    }





      public function update(Request $request,$id){


     	//return $request;

     	 $request->validate([
          'name'=>'required|unique:users,name|min:4',
         ]);

          $user=User::find($request->id);

          
    	
        	

        	$user->save();
        	
    	//return $data;
    		Session::flash('success', 'User has update successfully');
   	        return redirect()->route('user.view');
    }




    public function delete($id){

    	$delete=logo::find($id);
        unlink(public_path('logo/'.$delete->logo));
    	$delete->delete();
        Session::flash('success', 'User has delete successfully');
        return back(); 
    }

}
