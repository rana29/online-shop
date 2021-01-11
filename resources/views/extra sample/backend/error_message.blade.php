                  @if (Session('success'))
                    <div class="alert bg-primary fade in">
                    	<a href="#" class="close close-info" data-dismiss="alert">×</a>
                    	
                    {{Session('success')}}

                    </div>
                    @endif 
                    

					@if(count($errors)>0)

					@foreach($errors->all() as $error)

					<div class="alert bg-success fade in">
                    	<a href="#" class="close close-info" data-dismiss="alert">×</a>
                    	
                     {{$error}}

                    </div>

					@endforeach

					@endif


                     <!--  @php
                         $create=new Carbon\Carbon($customer->created_at);
                         $now=Carbon\Carbon::now();
                         $difference=($create->diff($now)->days<1)?'today':diffForHumans($now);
                         @endphp
                         -->



        $data=array(
        
        'email'=>$request->email,
        'name'=>$request->name,
        'code'=>$code,
        
      );

      Mail::send('frontend.single_page.mail',$data, function($message)use($data){
        $message->from('ranamasud@gmail.com')
                 ->to($data['email'])
                ->subject('Thanks');


       }); 


                        @if(@auth::user()->id !=Null)

                             <li class="active-menu">
                                <a href="#">My Account</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('product')}}">MY profile</a></li>
                                    <li><a href="{{route('customer.login')}}">My Dashbord</a></li>
                                    <li><a href="{{route('cart')}}">My Orders</a></li>
                                    <li><a href="{{route('cart')}}">Logout</a></li>
                                </ul>
                            </li>
                            @else

                            <li><a href="{{route('customer.login')}}">LOGIN</a></li>
                            <li><a href="{{route('customer.signup')}}">SIGNUP</a></li>

                            @endif








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



    
        $(document).on('change','#payment_method',function(){
    var payment_method==$this.val();
    if(payment_method=='Bkash'){
        $('.show_field').show();
    }
    else{
        $('.show-field').hide();
    }

});                    

