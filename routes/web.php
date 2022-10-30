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



/*Route::get ('/', function(){
   // return view('demo');

   

    $da =[
            '0'=>[
                'name' =>'Bitm',
                'city' => 'Dhaka',
                'country' => 'Bangladesh',

            ],
            '1' =>[
                'name' => 'Arzena Akter',
                'city' => 'Dhaka',
                'country' => 'Bangladesh',
            ],
        ];
        return $da;
    }

); */

Route::get('/','DemoController@index');
Route::get('/category','DemoController@category');
Route::get('/contact','DemoController@contact');
Route::get('/shortCode','DemoController@shortCode');
Route::get('/electronics','DemoController@electronics');
Route::get('/product-details','DemoController@productDetails');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
