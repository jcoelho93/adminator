<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DatabaseController extends Controller
{
    
	public function create(Request $request)
	{

		DB::statement("CREATE DATABASE ".$request->dbname." COLLATE = '".$request->collation."'");

		return redirect()->route('databases');

	}

	public function delete(Request $request)
	{

		DB::statement("DROP DATABASE ".$request->dbname);

		return redirect()->route('databases');

	}

	public function show($name){

		return view('database.index', ['name' => $name]);

	}

}
