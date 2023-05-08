
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
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="{{ route('app.index') }}" class="logo m-0 float-start">Actu IA<span class="text-primary">.</span></a>
						</div>
						@php
							$routeName = request()->route()->getName();
						@endphp
								
								@auth
									<div class="col-8 text-center">
		
									<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
											<li class="@class(['nav-link', 'active' => str_contains($routeName, 'backoffice.contents.') ])"><a href="{{ route('backoffice.contents.index') }}">Gérer les contenus </a></li>
											<li class="@class(['nav-link', 'active' => str_contains($routeName, 'logout') ])">
												<form action = "{{ route ('logout') }}" method="post">
				                                        @csrf
														@method('delete')
														<button>Se deconnecter</button>
			                                    </form>
											</li>
										</ul>
									</div>
										<div class="col-2 text-end">
										<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
											<span></span>
										</a>
										
									</div>
								@endauth
								@guest
									<div class="col-8 text-center">

										<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
										<li class="@class(['nav-link', 'active' => str_contains($routeName, 'contents.index') ])"><a href="{{ route('frontoffice.contents.index') }}"> Les Contenus </a></li>
										</ul>
									</div>
									
								@endguest
								
					</div>
				</div>
			</div>
		</div>
	</nav>