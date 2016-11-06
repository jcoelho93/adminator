<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    
	public function index(){

		$users = DB::select('SELECT user FROM user WHERE host = ?',['localhost']);

		return view('welcome', ['users' => $users]);

	}

	public function login(){
		
	}

}
