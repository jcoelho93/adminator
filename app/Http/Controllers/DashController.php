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

	public function importExport()
	{

		return view('dashboard.importexport');

	}

	public function console()
	{

		return view('dashboard.console');

	}

	public function settings()
	{

		return view('dashboard.settings');

	}

}
