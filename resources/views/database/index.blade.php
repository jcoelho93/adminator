@extends('layouts.master')

@section('title')
	| {{$name}}
@endsection

@section('breadcrums')
	<span class="cst-bc-chevron">></span>
	<a class="cst-white-link cst-breadcrum" href="{{route('databases')}}">databases</a>
	<span class="cst-bc-chevron">></span>
	<a class="cst-white-link cst-breadcrum" href="{{route('show-database',['name' => $name])}}">{{$name}}</a>
@endsection

@section('tabs')
	<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
		<a href="#tables-page" class="mdl-layout__tab is-active">Tables</a>
		<a href="#sql-page" class="mdl-layout__tab">SQL</a>
		<a href="#ie-page" class="mdl-layout__tab">Import/Export</a>
		<a href="#edit-page" class="mdl-layout__tab">Edit</a>
		<a href="#privileges-page" class="mdl-layout__tab">Privileges</a>
	</div>
@endsection

@section('content')
	<section class="mdl-layout__tab-panel is-active" id="tables-page">
		<div class="page-content">
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--8-col">
					<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp cst-wide-card">
						<thead>
							<tr>
								<th class="mdl-data-table__cell--non-numeric">Name</th>
								<th>Rows</th>
								<th>Engine</th>
								<th>Collation</th>
								<th>Size</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tables as $table)
								<tr data-href="{{route('show-table',['name'=>$table->name])}}" class="cst-clickable-row">
									<td class="mdl-data-table__cell--non-numeric">{{$table->name}}</td>
									<td>{{$table->rows}}</td>
									<td>{{$table->engine}}</td>
									<td>{{$table->collation}}</td>
									<td>{{$table->size}}</td>
									<td></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<section class="mdl-layout__tab-panel" id="sql-page">
		<div class="page-content">

		</div>
	</section>
	<section class="mdl-layout__tab-panel" id="ie-page">
		<div class="page-content">

		</div>
	</section>
	<section class="mdl-layout__tab-panel" id="edit-page">
		<div class="page-content">

		</div>
	</section>
	<section class="mdl-layout__tab-panel" id="privileges-page">
		<div class="page-content">

		</div>
	</section>
@endsection