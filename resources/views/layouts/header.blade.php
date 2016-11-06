<header class="mdl-layout__header">
	<div class="mdl-layout__header-row">
		<!-- Title -->
		<span class="mdl-layout-title">Adminator @yield('breadcrums')</span>
		<!-- Add spacer, to align navigation to the right -->
		<div class="mdl-layout-spacer"></div>
		<!-- Navigation. We hide it in small screens. -->
		<nav class="mdl-navigation mdl-layout--large-screen-only">
			<a class="mdl-navigation__link" href="{{route('home')}}">Home</a>
			<a class="mdl-navigation__link" href="{{route('databases')}}">Databases</a>
			<a class="mdl-navigation__link" href="#">Console</a>
			<a class="mdl-navigation__link" href="#">Import/Export</a>
			<a class="mdl-navigation__link" href="#">Settings</a>
		</nav>
	</div>
	@yield('tabs')
</header>
<div class="mdl-layout__drawer">
	<span class="mdl-layout-title">Adminator</span>
		<nav class="mdl-navigation">
			<a class="mdl-navigation__link" href="{{route('home')}}">Home</a>
			<a class="mdl-navigation__link" href="{{route('databases')}}">Databases</a>
			<a class="mdl-navigation__link" href="#">Console</a>
			<a class="mdl-navigation__link" href="#">Import/Export</a>
			<a class="mdl-navigation__link" href="#">Settings</a>
		</nav>
</div>