@extends('layouts.master')
@section('content')
<div class="page-content">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--4-col">
			<div class="mdl-card mdl-shadow--2dp cst-wide-card">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">MySQL Server</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<table border="0" width="100%">
						<tr>
							<td class="cst-bold cst-upper cst-text-top">server version</td><td class="cst-text-right">{{$mysql_status['server_version']}}</td>
						</tr>
						<tr>
							<td class="cst-bold cst-upper">Connection</td><td class="cst-text-right">{{$mysql_status['connection']}}</td>
						</tr>
						<tr>
						<tr>
							<td class="cst-bold cst-upper">connection id</td><td class="cst-text-right">{{$mysql_status['connection_id']}}</td>
						</tr>
							<td class="cst-bold cst-upper">current user</td><td class="cst-text-right">{{$mysql_status['current_user']}}</td>
						</tr>
						<tr>
							<td class="cst-bold cst-upper">server charset</td><td class="cst-text-right">{{$mysql_status['charset']}}</td>
						</tr>
						<tr>
							<td class="cst-bold cst-upper">uptime </td><td class="cst-text-right">{{gmdate("H:i:s",$mysql_status['uptime'])}}</td>
						</tr>
						<tr>
							<td class="cst-bold cst-upper">bytes sent</td><td class="cst-text-right">{{$mysql_status['bytes_sent']}}</td>
						</tr>
						<tr>
							<td class="cst-bold cst-upper">bytes received </td><td class="cst-text-right">{{$mysql_status['bytes_received']}}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--4-col">
			<div class="mdl-card mdl-shadow--2dp cst-wide-card">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">Web Server</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<table border="0" width="100%">
						<tr>
							<td width="30%" class="cst-bold cst-upper cst-text-top">OS</td><td class="cst-text-right">{{php_uname()}}</td>
						</tr>
						<tr>
							<td class="cst-bold cst-upper cst-text-top">server</td><td class="cst-text-right">{{apache_get_version()}}</td>
						</tr>
						<tr>
							<td class="cst-bold cst-upper cst-text-top">php</td><td class="cst-text-right">{{PHP_VERSION}}</td>
						</tr>
						
					</table>
				</div>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--4-col">
			<div class="mdl-card mdl-shadow--2dp cst-wide-card">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">Stats</h2>
				</div>
				<div class="mdl-card__supporting-text">

				</div>
			</div>
		</div>
	</div>
</div>
@endsection