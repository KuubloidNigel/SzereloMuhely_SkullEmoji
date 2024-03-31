{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('azonosito', 'Azonosito:') }}
			{{ Form::text('azonosito') }}
		</li>
		<li>
			{{ Form::label('nev', 'Nev:') }}
			{{ Form::text('nev') }}
		</li>
		<li>
			{{ Form::label('jelszo', 'Jelszo:') }}
			{{ Form::text('jelszo') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}