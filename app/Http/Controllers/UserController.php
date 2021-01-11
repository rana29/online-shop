<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{
    public function view(){
    	$data=User::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.view',compact('data'));
    }


     public function create(){
    	$data=User::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.user.user_create');
    }


     public function store(Request $request){


     	//return $request;

     	 $request->validate([
          'name'=>'required|unique:users,name|min:4',
         ]);

    	$store=User::create([
        	'name'=>$request->name,
        	'role'=>$request->role,
        	'email'=>$request->email,
        	'password'=>$request->password,
        	'mobile'=>$request->mobile,
        	'address'=>$request->address,
        	'gender'=>$request->gender,
        	]);
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

          
    	
        	$user->name=$request->name;
        	$user->role=$request->role;
        	$user->email=$request->email;
        	
        	$user->mobile=$request->mobile;
        	$user->address=$request->address;
        	$user->gender=$request->gender;
        	

        	$user->save();
        	
    	//return $data;
    		Session::flash('success', 'User has update successfully');
   	        return redirect()->route('user.view');
    }




    public function delete($id){

    	$delete=User::find($id);
      unlink(public_path('logo/'.$delete->logo));
    	$delete->delete();
        Session::flash('success', 'User has delete successfully');
        return back(); 
    }






}
