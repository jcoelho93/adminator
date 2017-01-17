<header class="mdl-layout__header">
	<div class="mdl-layout__header-row">
		<span class="mdl-layout-title">Adminator @yield('breadcrums')</span>
		<div class="mdl-layout-spacer"></div>
		<nav class="mdl-navigation mdl-layout--large-screen-only">
			<a class="mdl-navigation__link {{Request::is('/')?'cst-active':null}}" href="{{route('home')}}">Home</a>
			<a class="mdl-navigation__link {{Request::is('databases')?'cst-active':null}}" href="{{route('databases')}}">Databases</a>
			<a class="mdl-navigation__link {{Request::is('console')?'cst-active':null}}" href="{{route('console')}}">Console</a>
			<a class="mdl-navigation__link {{Request::is('importexport')?'cst-active':null}}" href="{{route('import-export')}}">Import/Export</a>
			<a class="mdl-navigation__link {{Request::is('settings')?'cst-active':null}}" href="{{route('settings')}}">Settings</a>
		</nav>
	</div>
	@yield('tabs')
</header>
<div class="mdl-layout__drawer">
	<span class="mdl-layout-title">Adminator</span>
		<nav class="mdl-navigation">
			<a class="mdl-navigation__link" href="{{route('home')}}">Home</a>
			<a class="mdl-navigation__link" href="{{route('databases')}}">Databases</a>
			<a class="mdl-navigation__link" href="{{route('console')}}">Console</a>
			<a class="mdl-navigation__link" href="{{route('import-export')}}">Import/Export</a>
			<a class="mdl-navigation__link" href="#">Settings</a>
		</nav>
</div>