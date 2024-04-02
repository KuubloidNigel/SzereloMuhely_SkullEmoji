@extends('layout')

@section('content')
    <h1>Új Munkafelvevo Hozzáadása</h1>

    <form method="POST" action="{{ route('munkafelvevos.store') }}">
        @csrf 

        {{--  Add input fields specific to your Munkafelvevo model --}}

        <button type="submit" class="btn btn-primary">Mentés</button>
    </form>
@endsection
