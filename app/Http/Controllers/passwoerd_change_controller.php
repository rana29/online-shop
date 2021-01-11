<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;
use Hash;
use Session;

class passwoerd_change_controller extends Controller
{
    public function password_change(){
    	return view('backend.password_change');
    }

     public function password_update(request $request){

    		$id=Auth::user()->id;
    		$db_pass=Auth::user()->password;
    		//return $db_pass;
    		$old_pass=$request->old;
            //return $old_pass;
    		$new_pass=$request->new;

    		
    		$con_pass=$request->confarm;
    		//return $con_pass;

    		if(Hash::check($old_pass,$db_pass)){
    		if($new_pass===$con_pass){

    			

    		$user=User::find($id);
    		//return $user;
    		$user->password=bcrypt($request->new);
    		$user->save();

    		Session::flash('success', 'password has update successfully');
   	        return redirect()->back();
      } else{

	  Session::flash('success', 'password does not match');
      return redirect()->back();


}

   }

  else{
     Session::flash('success', 'password is not correct');
     return redirect()->back();

    }

    	
    }

}
