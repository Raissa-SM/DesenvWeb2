@extends('layout.principal')

@section('content')
    <h1>Resultado da análise IMC</h1>
    <h2>{{ $nome }}</h2>
    <p><strong>Idade:</strong> {{ $idade }}</p>
    <p><strong>Peso:</strong> {{ $peso }}kg</p>
    <p><strong>Altura:</strong> {{ $altura }}m</p>
    <p><strong>IMC:</strong> {{ $imc }} - {{ $classificacao }}</p>

    <a href="{{ url('/imc') }}"><button>Novo Cálculo</button></a> |
    <a href="{{ url('/') }}"><button>Voltar para Home</button></a>
@endsection