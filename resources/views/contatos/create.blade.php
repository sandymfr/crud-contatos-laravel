@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
        <form action= "{{ route('contatos.store') }}" clas="form-horizontal" method="POST">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label>Nome do contato</label>
                    <input type="text" class="form-control" name="nome">
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

                <div class="row"><button type="submit" class="btn btn-default">Cadastrar contato</button></div>
        </form>
        </div>
    </div>
@endsection
