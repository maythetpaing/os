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
        $items=Item::all();
    	return view('frontend.item',compact('items'));
	}
	public function detail($id){
        $items=Item::find($id);

    	return view('frontend.detail',compact('items'));
	}
	public function checkout($value=''){
        $items=Item::all();
    	return view('frontend.checkout',compact('items'));
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
