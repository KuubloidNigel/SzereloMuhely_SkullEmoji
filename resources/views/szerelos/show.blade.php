@extends('layout')

@section('content')
    <h1>Szerelo Részletei</h1>

    <div>
        <p><strong>Név:</strong> {{ $szerelo->nev }}</p>
        <p><strong>Azonosító:</strong> {{ $szerelo->azonosito }}</p>
        {{-- Add more fields here as needed --}}
    </div>

    @can('update', $szerelo)
        <a href="{{ route('szerelos.edit', $szerelo->azonosito) }}" class="btn btn-primary">Szerkesztés</a>
    @endcan

    {{-- Add a delete button here with appropriate authorization if needed--}} 
@endsection
