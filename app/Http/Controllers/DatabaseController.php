<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DatabaseController extends Controller
{

	public function index()
	{

		$databases = DB::select("SELECT * FROM information_schema.schemata");
		$default_collation = DB::select("SELECT DEFAULT_COLLATION_NAME as collation FROM information_schema.schemata WHERE schema_name = 'information_schema'")[0]->collation;
		$collations = DB::select("SELECT COLLATION_NAME FROM information_schema.collations ORDER BY COLLATION_NAME");

		return view('database.index', ['databases' => $databases, 'collations' => $collations, 'default_collation' => $default_collation]);
		
	}
    
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

		return view('table.index', ['name' => $name, 'tables' => $tables]);

	}

}
