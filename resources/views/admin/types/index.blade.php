@extends('layouts.app')

@section('title', 'Tipologie')

@section('content')
    <div class="container">
        <h1 class="my-3">Lista Tipologie</h1>

        <a href="{{ route('admin.types.create') }}" class="btn btn-primary mb-3">Crea Nuova Tipologia</a>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Colore</th>
                    <th scope="col">Badge</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($types as $type)
                    <tr>
                        <th scope="row">{{ $type->id }}</th>
                        <td>{{ $type->type }}</td>
                        <td>{{ $type->color }}</td>
                        <td>{!! $type->getBadge() !!}</td>
                        <td>
                            <a href="{{ route('admin.types.show', $type) }}" class="me-2"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.types.edit', $type) }}" class="me-2"><i
                                    class="fa-solid fa-pen-to-square"></i></a>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%">Nessun risultato trovato</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $types->links() }}
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
