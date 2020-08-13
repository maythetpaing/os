<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	$items=Item::orderBy('id','desc')
    					->take(6)
    					->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }
    
	 public function item($value=''){
    	return view('frontend.item');
	}
	public function detail($id){
    	return view('frontend.detail');
	}
	public function checkout($value=''){
    	return view('frontend.checkout');
	}
	public function login($value=''){
    	return view('frontend.login');
	}
	public function profile($value=''){
    	return view('frontend.profile');
	}
	public function register($value=''){
    	return view('frontend.register');
	}
}
