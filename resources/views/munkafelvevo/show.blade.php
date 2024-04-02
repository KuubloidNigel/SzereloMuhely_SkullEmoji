@extends('layout')

@section('content')
    <h1>Munkafelvevo Részletei</h1>

    <div>
        <p><strong>Név:</strong> {{ $munkafelvevo->nev }}</p>
        <p><strong>Azonosító:</strong> {{ $munkafelvevo->azonosito }}</p>
        {{-- Add more Munkafelvevo fields here --}}
    </div>

    @can('update', $munkafelvevo)
        <a href="{{ route('munkafelvevos.edit', $munkafelvevo->azonosito) }}" class="btn btn-primary">Szerkesztés</a>
    @endcan

    {{-- Add a delete button here with authorization if needed --}}
@endsection
