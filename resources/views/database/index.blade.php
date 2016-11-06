@extends('layouts.master')

@section('title')
	| {{$name}}
@endsection

@section('breadcrums')
	<span class="cst-bc-chevron">></span>
	<a class="cst-white-link cst-breadcrum" href="{{route('databases')}}">Databases</a>
	<span class="cst-bc-chevron">></span>
	<a class="cst-white-link cst-breadcrum" href="{{route('show-database',['name' => $name])}}">{{$name}}</a>
@endsection

@section('tabs')
	<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
		<a href="#tables-page" class="mdl-layout__tab is-active">Tables</a>
		<a href="#sql-page" class="mdl-layout__tab">SQL</a>
		<a href="#io-page" class="mdl-layout__tab">Import/Export</a>
		<a href="#edit-page" class="mdl-layout__tab">Edit</a>
		<a href="#privileges-page" class="mdl-layout__tab">Privileges</a>
	</div>
@endsection

@section('content')
	<section class="mdl-layout__tab-panel is-active" id="tables-page">
		<div class="page-content">

		</div>
	</section>
	<section class="mdl-layout__tab-panel" id="sql-page">
		<div class="page-content">

		</div>
	</section>
	<section class="mdl-layout__tab-panel" id="io-page">
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