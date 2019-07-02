@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contatos as $contato)
                        <tr>
                            <th scope="row">{{ $contato->id }}</th>
                            <td>{{ $contato->contato }}</td>
                            <td>
                                <a href="{{ route('contatos.show', ['contato' => $contato->id]) }}">Visualizar</a>
                                <a href="{{ route('contatos.edit', ['contato' => $contato->id]) }}">Editar</a>
                                <a href="{{ route('contatos.destroy', ['contato' => $contato->id]) }}">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>















@endsection

