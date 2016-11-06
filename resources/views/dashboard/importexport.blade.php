@extends('layouts.master')

@section('tabs')
	<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
		<a href="#import-tab" class="mdl-layout__tab is-active">Import</a>
		<a href="#export-tab" class="mdl-layout__tab">Export</a>
	</div>
@endsection

@section('content')
	<section class="mdl-layout__tab-panel is-active" id="import-tab">
		<div class="page-content">

		</div>
	</section>
	<section class="mdl-layout__tab-panel" id="export-tab">
		<div class="page-content">

		</div>
	</section>
@endsection