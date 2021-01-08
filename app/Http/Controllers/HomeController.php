<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class HomeController extends Controller
{
	public function index($value='')
	{
		return view('index');
	}
    public function getLogin()
    {
    	if(Session::has('login')){
    		return redirect('/');
    	}
    	return view('login');
    }
    public function postLogin(Request $request)
    {
    // 	if($request->password == "051098"){
    if($request->password == "1998"){
    		session()->put('login', true);
    		return redirect('/');
    	}
    	session()->flash('error', 'Password is failed!');
    	return back();	
    }
    public function getLogout()
    {
    	session()->forget('login');
    	return redirect('/');
    }
}
