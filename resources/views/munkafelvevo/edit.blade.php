@extends('layout')

@section('content')
    <h1>Munkafelvevo Szerkesztése</h1>

    <form method="POST" action="{{ route('munkafelvevos.update', $munkafelvevo->azonosito) }}">
        @csrf 
        @method('PUT')

        {{-- Input fields for your Munkafelvevo model (prefilled). --}}

        <button type="submit" class="btn btn-primary">Mentés</button>
    </form>
@endsection
