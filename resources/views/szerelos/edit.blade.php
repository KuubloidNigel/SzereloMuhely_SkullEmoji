@extends('layout')

@section('content')
    <h1>Szerelo Szerkesztése</h1>

    <form method="POST" action="{{ route('szerelos.update', $szerelo->azonosito) }}">
        @csrf 
        @method('PUT') {{-- Important for the update action --}}

        {{-- Your input fields (prefilled with $szerelo data) --}}

        <button type="submit" class="btn btn-primary">Mentés</button>
    </form>
@endsection
