<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');






Route::group(['middleware'=>['auth','admin','login','verified']],function(){

Route::prefix('admin')->name('admin.')->group(function(){

Route::get('/dashbord','AdminController@dashbord')->name('dashbord');

});

}); 


Route::group(['middleware'=>['auth','author','login']],function(){

Route::prefix('author')->name('author.')->group(function(){

Route::get('/dashbord','AuthorController@dashbord')->name('dashbord');

	
});
});


Route::group(['middleware'=>['auth','customer','login']],function(){

Route::prefix('custom')->name('customer.')->group(function(){

Route::get('/customer/dashbord','customercontroller@custome_dashbord')->name('dashbord');

	
});
});  


/*frontend controller*/

Route::get('/','FrontendController@index')->name('home');
Route::get('/about','FrontendController@about')->name('about');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::get('/shopping/cart','FrontendController@cart')->name('cart');
Route::get('/product/list','FrontendController@product')->name('product');
Route::get('/product/catagory/{id}','FrontendController@catagory')->name('product.catagory');
Route::get('/product/brand/{id}','FrontendController@brand')->name('product.brand');
Route::get('/product/detils/{slug}','FrontendController@detils')->name('product.detils');

/*change password*/
Route::get('/change/password','passwoerd_change_controller@password_change')->name('change.password');
Route::post('/update/password','passwoerd_change_controller@password_update')->name('update.password');


/*logo controllel*/

Route::prefix('logo')->name('logo.')->group(function(){

    
	Route::get('/create','logocontroller@create')->name('create');
	Route::get('/store','logocontroller@store')->name('store');
	Route::get('/manage','logocontroller@manage')->name('manage');
	Route::get('/active/{id}/{status}','logocontroller@active')->name('active');
	Route::get('/edit/{id}','logocontroller@edit')->name('edit');
	Route::get('/edit/{id}','logocontroller@update')->name('update');
	Route::get('/delete/{id}','logocontroller@delete')->name('delete');
	
}); 


/*Catagory controllel*/

Route::prefix('catagory')->name('catagory.')->group(function(){

    
	Route::get('/create','CatagoryController@create')->name('create');
	Route::post('/store','Catagorycontroller@store')->name('store');
	Route::get('/manage','CatagoryController@manage')->name('manage');
	Route::get('/active/{id}/{status}','catagoryController@active')->name('active');
	Route::get('/edit/{id}','CatagoryController@edit')->name('edit');
	Route::post('/update/{id}','CatagoryController@update')->name('update');
	Route::get('/delete/{id}','CatagoryController@delete')->name('delete');
	
}); 


/*Brand controllel*/

Route::prefix('brand')->name('brand.')->group(function(){

    
	Route::get('/create','BrandController@create')->name('create');
	Route::post('/store','Brandcontroller@store')->name('store');
	Route::get('/manage','BrandController@manage')->name('manage');
	Route::get('/active/{id}/{status}','BrandController@active')->name('active');
	Route::get('/edit/{id}','BrandController@edit')->name('edit');
	Route::post('/update/{id}','BrandController@update')->name('update');
	Route::get('/delete/{id}','BrandController@delete')->name('delete');
	
}); 


/*size controllel*/

Route::prefix('size')->name('size.')->group(function(){

    
	Route::get('/create','SizeController@create')->name('create');
	Route::post('/store','Sizecontroller@store')->name('store');
	Route::get('/manage','SizeController@manage')->name('manage');
	Route::get('/active/{id}/{status}','SizeController@active')->name('active');
	Route::get('/edit/{id}','SizeController@edit')->name('edit');
	Route::post('/update/{id}','SizeController@update')->name('update');
	Route::get('/delete/{id}','SizeController@delete')->name('delete');
	
}); 

/*color controllel*/

Route::prefix('color')->name('color.')->group(function(){

    
	Route::get('/create','ColorController@create')->name('create');
	Route::post('/store','Colorcontroller@store')->name('store');
	Route::get('/manage','ColorController@manage')->name('manage');
	Route::get('/active/{id}/{status}','ColorController@active')->name('active');
	Route::get('/edit/{id}','ColorController@edit')->name('edit');
	Route::post('/update/{id}','ColorController@update')->name('update');
	Route::get('/delete/{id}','ColorController@delete')->name('delete');
	
}); 

/*product controllel*/

Route::prefix('product')->name('product.')->group(function(){

    
	Route::get('/create','ProductController@create')->name('create');
	Route::post('/store','Productcontroller@store')->name('store');
	Route::get('/manage','ProductController@manage')->name('manage');
	Route::get('/active/{id}/{status}','ProductController@active')->name('active');
	Route::get('/edit/{id}','ProductController@edit')->name('edit');
	Route::post('/update/{id}','ProductController@update')->name('update');
	Route::get('/delete/{id}','ProductController@delete')->name('delete');
	Route::get('/detil/{id}','ProductController@detil')->name('detil');
	
}); 


/*contact controllel*/

Route::prefix('contact')->name('contact.')->group(function(){

    
	Route::get('/create','contactController@create')->name('create');
	Route::post('/store','contactcontroller@store')->name('store');
	Route::get('/manage','contactController@manage')->name('manage');
	Route::get('/active/{id}/{status}','contactController@active')->name('active');
	Route::get('/edit/{id}','contactController@edit')->name('edit');
	Route::post('/update/{id}','contactController@update')->name('update');
	Route::get('/delete/{id}','contactController@delete')->name('delete');
	Route::get('/detil/{id}','contactController@detil')->name('detil');
	
});


/*slider controllel*/

Route::prefix('slider')->name('slider.')->group(function(){

    
	Route::get('/create','sliderController@create')->name('create');
	Route::post('/store','slidercontroller@store')->name('store');
	Route::get('/manage','sliderController@manage')->name('manage');
	Route::get('/active/{id}/{status}','sliderController@active')->name('active');
	Route::get('/edit/{id}','sliderController@edit')->name('edit');
	Route::post('/update/{id}','sliderController@update')->name('update');
	Route::get('/delete/{id}','sliderController@delete')->name('delete');
	Route::get('/detil/{id}','sliderController@detil')->name('detil');
	
}); 

/*cart controller*/

Route::prefix('cart')->name('cart.')->group(function(){
	
	Route::post('/store','cartcontroller@store')->name('store');
	Route::get('/manage','cartcontroller@manage')->name('manage');
	Route::post('/update','cartcontroller@update')->name('update');
	Route::get('/delete/{rowId}','cartcontroller@delete')->name('delete');
});

/*customer controller*/


Route::prefix('customer')->name('customer.')->group(function(){
	
	Route::get('/login','customercontroller@login')->name('login');
	Route::get('/sign-up','customercontroller@signup')->name('signup');
	Route::post('/store','customercontroller@store')->name('store');
	Route::get('/verify','customercontroller@verify')->name('verify');
	Route::post('/verify/code','customercontroller@verify_code')->name('code');
	Route::get('/edit/profile','customercontroller@edit_profile')->name('edit');
	Route::post('/edit/profile','customercontroller@update_profile')->name('update');
	Route::get('/checkout','customercontroller@checkout')->name('checkout');
	Route::post('/checkout/store','customercontroller@checkout_store')->name('checkout.store');
	Route::get('/payment','customercontroller@payment')->name('payment');
	Route::post('/payment/store','customercontroller@payment_store')->name('payment.store');
	Route::get('/shipping','customercontroller@shipping')->name('shipping');
	Route::get('/shipping/store','customercontroller@shipping_store')->name('shipping.store');
	
            /*customer setup in backend*/
	Route::get('/manage','backendcustomercontroller@manage')->name('manage');
	Route::get('/add','backendcustomercontroller@add')->name('add');
	Route::get('/delete/{id}','backendcustomercontroller@delete')->name('delete');

});




