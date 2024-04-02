@extends('layout') 

@section('content')
    <h1>Munkafelvevők Listája</h1>

    @if(auth()->user()->can('create', App\Models\Munkafelvevo::class))
        <a href="{{ route('munkafelvevos.create') }}" class="btn btn-primary">Új Munkafelvevo</a>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Név</th>
            <th>Azonosító</th>
            <th>Műveletek</th> 
        </tr>
        </thead>
        <tbody>
        @forelse ($munkafelvevos as $munkafelvevo)
            <tr>
                <td>{{ $munkafelvevo->nev }}</td>
                <td>{{ $munkafelvevo->azonosito }}</td>
                <td>
                    <a href="{{ route('munkafelvevos.show', $munkafelvevo->azonosito) }}">Részletek</a>
                    @can('update', $munkafelvevo) 
                        <a href="{{ route('munkafelvevos.edit', $munkafelvevo->azonosito) }}">Szerkesztés</a>
                    @endcan 
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Jelenleg nincsenek munkafelvevok.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
