{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('nev', 'Nev:') }}
			{{ Form::text('nev') }}
		</li>
		<li>
			{{ Form::label('cim', 'Cim:') }}
			{{ Form::text('cim') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}