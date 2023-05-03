<title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 ">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center">

							<ul class="js-clone-nav d-flex justify-content-between text-start site-menu mx-auto">
								<li class="active border-bottom"><a href="{{ route('login') }}">Admin</a></li>
								
								@if (Route::has('login'))
								@auth
								<x-app-layout>
   
								</x-app-layout>
								@else
								<li><a class="btn btn-info" href="{{ route('login') }}">Login</a></li>
								@endauth

								@endif

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
