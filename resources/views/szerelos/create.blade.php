@extends('layout')

@section('content')
    <h1>Új Szerelo Hozzáadása</h1>

    <form method="POST" action="{{ route('szerelos.store') }}">
        @csrf 

        {{-- Your input fields for 'nev', 'azonosito', 'jelszo' etc. --}}

        <button type="submit" class="btn btn-primary">Mentés</button>
    </form>
@endsection
