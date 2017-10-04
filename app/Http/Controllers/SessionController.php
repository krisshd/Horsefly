<?php

namespace Horsefly\Http\Controllers;

use Illuminate\Http\Request;
use Horsefly\User;

class SessionController extends Controller
{
    public function index(){
    	return "krishna mohan dubey";
    }
    public function create(){
    	return view('register');	
    }
    public function store(){
    	//validate form
    	$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required',
    		'password'=>'required|confirmed'
    	]);
    	//create and save the user
    	
    	// $user = User::create(request(['name','email','password']));
    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))
    	]);

    	//sign in them
    	auth()->login($user);
    	
    	//redierect after login
    	return redirect()->home();
    }
    public function login(){
    	$this->validate(request(),[
    		'email'=> 'required',
    		'password' => 'required'
    	]);
    	
    	if(! auth()->attempt(request(['email','password']))){
    		return back()->withErrors([
    			'message'=> 'Please check your credential and Try Again'
    		]);
    	}
    	
    	return redirect()->home();
		// return "hello sign in";    	
    }
    // public function destroy(){
    // 	Auth::logout();
    // 	return reidrect()->home();
    // }
}
