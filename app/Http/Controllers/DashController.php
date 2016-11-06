<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDO;

class DashController extends Controller
{
    
	public function index()
	{

		$info = DB::select("SELECT user() as user, charset('') as charset, connection_id() as conn, version() as version")[0];
		$uptime = DB::select("SHOW STATUS LIKE 'uptime'")[0]->Value;
		$bytes = DB::select("SHOW STATUS LIKE 'bytes%'");
		$mysql_status = [
			"connection" => DB::connection()->getPdo()->getAttribute(PDO::ATTR_CONNECTION_STATUS),
			"server_version" => $info->version,
			"current_user" => $info->user,
			"charset" => $info->charset,
			"connection_id" => $info->conn,
			"uptime" => $uptime,
			"bytes_sent" => $bytes[1]->Value,
			"bytes_received" => $bytes[0]->Value
		];

		return view('dashboard.index', ['mysql_status' => $mysql_status]);
	}

	public function databases()
	{

		$databases = DB::select("SELECT * FROM information_schema.schemata");
		$default_collation = DB::select("SELECT DEFAULT_COLLATION_NAME as collation FROM information_schema.schemata WHERE schema_name = 'information_schema'")[0]->collation;
		$collations = DB::select("SELECT COLLATION_NAME FROM information_schema.collations ORDER BY COLLATION_NAME");

		return view('dashboard.databases', ['databases' => $databases, 'collations' => $collations, 'default_collation' => $default_collation]);

	}

	public function importExport()
	{

		return view('dashboard.importexport');

	}

}
