<div class = "mt-4 container">
	<h1>@yield('title')</h1>
	
	<form action = "{{ route ('login') }}" method = "post">
			@csrf
		<div class = "p-3">
					@include('components.input', ['type'=> 'email', 'class' => 'col' ,'name' => 'email', 'label' =>'Email', 'value' => "admin@gmail.com"])
			</div>
			<div class = "p-3">
					@include('components.input', ['type'=> 'password', 'class' => 'col' ,'name' => 'password', 'label' =>'Mot de passe', 'value' => 'admin'])
			</div>
			<div class = "p-3">
				<button class = "btn btn-primary">
					Se connecter
				</button>
			</div>
	</form>
	
</div>
