@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            Você está visualizando o seguinte contato: <strong>{{ $contato->contato }}</strong>
        </div>
    </div>
@endsection