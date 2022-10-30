<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        /*
        $data =[
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


        //return $data;
        //return view('demo',compact('data'));
        //return view('demo',['data'=>$data]);
        return view('demo')->with('data',$data);
        */

        return view('frontEnd.home.homeContent');
    }
    public function category(){
        return view('frontEnd.category.categoryContent');

    }
    public function contact(){
        return view('frontEnd.contact.contactContent');

    }
    public function shortCode(){
        return view('frontEnd.shortCode.shortCodeContent');
    }
    public function electronics(){
        return view('frontEnd.electronics.electronicsContent');
    }
    public function productDetails(){
        return view('frontEnd.product.productDetails');
    }

}
