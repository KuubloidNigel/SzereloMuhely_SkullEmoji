{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('nev', 'Nev:') }}
			{{ Form::text('nev') }}
		</li>
		<li>
			{{ Form::label('ar', 'Ar:') }}
			{{ Form::text('ar') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}