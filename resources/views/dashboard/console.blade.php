@extends('layouts.master')

@section('title')
	| Console
@endsection

@section('content')
	<div class="page-content">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<textarea id="console" class="cst-console mdl-shadow--2dp" rows="15"></textarea>
			</div>
		</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col mdl-shadow--2dp cst-action-row">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  					Format
				</button>
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  					Clear
				</button>
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
  					<i class="material-icons">arrow_forward</i>
				</button>
			</div>
		</div>
	</div>
@endsection