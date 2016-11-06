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

		$tables = DB::select("SELECT TABLE_NAME as name, ENGINE as engine, (DATA_LENGTH + INDEX_LENGTH) as size, TABLE_COLLATION as collation FROM information_schema.tables WHERE TABLE_SCHEMA = :db", ['db' => $name]);

		foreach($tables as $table){
			$table->rows = DB::select("SELECT COUNT(*) as rows FROM ".$name.".".$table->name)[0]->rows;
		}

		return view('database.index', ['name' => $name, 'tables' => $tables]);

	}

}
