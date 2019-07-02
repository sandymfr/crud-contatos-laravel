@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
        <form action= "{{ route('contatos.update', ['contato' => $contato->id]) }}" clas="form-horizontal" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group">
                    <label>Nome do contato</label>
                    <input type="text" class="form-control" name="contato" value="{{ old('contato', $contato->contato) }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group">    
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>

                <div class="row"><button type="submit" class="btn btn-default">Atualizar</button></div>
        </form>
        </div>
    </div>
@endsection
