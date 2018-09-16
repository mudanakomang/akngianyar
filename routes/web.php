<?php

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

Route::get('/',function (){
    if(Auth::user()){
        return redirect('admin/home');
    }else {
        return redirect('home');
    }
});
Route::get('home', function () {
    if(Auth::user()){
        return view('admin.index');
    }else {

    $sliders=\App\Slider::orderBy('created_at','desc')->take(3)->get();
        return view('public.home.index',['sliders'=>$sliders]);
    }
});
Route::get('about',function (){
   return view('public.about.index');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
   Route::get('/',function (){
       return redirect('login');
   });
    Route::get('home',function (){
       return view('admin.index');
   });
   Route::get('about',function (){
       return view('admin.about.index');
   });

//
// Slider    /

   Route::get('slider','SliderController@index');
   Route::get('slider/create','SliderController@create');
   Route::post('slider/store','SliderController@store')->name('slider.store');
});
Route::get('validate/{code}','\Auth\RegisterController@activateUser')->name('activate.user');
