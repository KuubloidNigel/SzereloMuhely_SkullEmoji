@extends('layout')

@section('content')
    <h1>Szerelők Listája</h1>

    @if(auth()->user()->can('create', App\Models\Szerelo::class)) {{-- Authorization Check --}}
        <a href="{{ route('szerelos.create') }}" class="btn btn-primary">Új Szerelo</a>
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
        @forelse ($szerelos as $szerelo)
            <tr>
                <td>{{ $szerelo->nev }}</td>
                <td>{{ $szerelo->azonosito }}</td>
                <td>
                    <a href="{{ route('szerelos.show', $szerelo->azonosito) }}">Részletek</a>
                    @can('update', $szerelo)  {{-- Authorization for editing --}}
                        <a href="{{ route('szerelos.edit', $szerelo->azonosito) }}">Szerkesztés</a>
                    @endcan 
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Jelenleg nincsenek Szerelok.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
