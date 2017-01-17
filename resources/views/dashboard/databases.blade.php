@extends('layouts.master')
@section('title')
 | Databases
@endsection
@section('content')
<div class="page-content">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--8-col">
			<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp cst-wide-card">
				<thead>
					<tr>
						<th class="mdl-data-table__cell--non-numeric">Name</th>
						<th>Character set</th>
						<th>Collation</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($databases as $db)
						<tr>
							<td data-href="{{route('show-database',['name'=>$db->SCHEMA_NAME])}}" class="cst-clickable-row mdl-data-table__cell--non-numeric">{{$db->SCHEMA_NAME}}</td>
							<td data-href="{{route('show-database',['name'=>$db->SCHEMA_NAME])}}" class="cst-clickable-row">{{$db->DEFAULT_CHARACTER_SET_NAME}}</td>
							<td data-href="{{route('show-database',['name'=>$db->SCHEMA_NAME])}}" class="cst-clickable-row">{{$db->DEFAULT_COLLATION_NAME}}</td>
							<td>
								<form action="{{action('DatabaseController@delete')}}" method="post" onsubmit="return confirm('Are you sure you want to delete this database?');">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<input type="hidden" name="dbname" value="{{$db->SCHEMA_NAME}}">
									<button class="mdl-button mdl-js-button cst-delete-icon"><i class="mdl-color-text--blue-grey-400 material-icons">delete</i></button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="mdl-cell mdl-cell--4-col">
			<div class="mdl-card mdl-shadow--2dp cst-wide-card">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">Create new database</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<form method="POST" action="{{route('create-database')}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<table class="cst-wide-card">
							<tr>
								<td>
									<div class="mdl-textfield mdl-js-textfield cst-wide-card">
										<input class="mdl-textfield__input" type="text" id="dbname" name="dbname">
										<label class="mdl-textfield__label" for="dbname">Name...</label>
									</div>	
								</td>
							</tr>
							<tr>
								<td>
									<select name="collation" class="mdl-button cst-collation-drop cst-wide-card">
										<option value="{{$default_collation}}">SELECT COLLATION...</option>
										@foreach($collations as $collation)
											<option value="{{$collation->COLLATION_NAME}}">{{$collation->COLLATION_NAME}}</option>
										@endforeach
									</select>
								</td>
							</tr>
							<tr>
								<td class="cst-text-right">
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">Create</button>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--8-col mdl-shadow--2dp cst-action-row cst-text-right">
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"><i class="material-icons">delete</i>Delete</button>
		</div>
	</div>
</div>
@endsection