<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Auth;
use Session;
use Hash;
use Image;

class contactcontroller extends Controller
{
       public function manage(){
        $count=contact::count();
    	$contact=contact::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.contact.manage_contact',compact('contact','count'));
    }


     public function create(){
    	
    	//return $data;
    	return view('backend.contact.create_contact');
    }


     public function store(Request $request){




     	//return $request;

     	 $request->validate([
          'mobile'=>'required|unique:users,name|min:4',
         ]);

    	$store=contact::create([
        	'address'=>$request->address,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
            'created'=>Auth::user()->id,
            'updated'=>Auth::user()->id,
        	
        	
        	]);

    	//return $data;
    		Session::flash('success', 'contact has added successfully');
   	        return back();
    }

    public function edit($id){

    	$edit=contact::find($id);

    	//return $data;

    	return view('backend.contact.update_contact',compact('edit'));

    }





      public function update(Request $request,$id){

      $contact=contact::find($request->id);
     	//return $request;
    
    $request->validate([
    'mobile'=>'required|unique:users,name|min:4',
    ]);

          

     $contact->address=$request->address;
     $contact->email=$request->email;
     $contact->mobile=$request->mobile;
     $contact->facebook=$request->facebook;
     $contact->twitter=$request->twitter;
     $contact->youtube=$request->youtube;
     
     
     $contact->save();

     
    



          
  //return $data;
    		Session::flash('success', 'contact has update successfully');
   	        return redirect()->route('contact.view');
    }




    public function delete($id){

    	$delete=contact::find($id);
      
    	$delete->delete();
        Session::flash('success', 'contact has delete successfully');
        return back(); 
    }
}
