@extends('layout.principal')
@section('content')
    <h1>{{ $titulo }}</h1>
    
    <form action="{{ url('/imc/calcular') }}" method="POST">
        @csrf <label>Nome:</label>
        <input type="text" name="nome" required><br>
        
        <label>Data de Nascimento:</label>
        <input type="date" name="nascimento" required><br>
        
        <label>Peso (kg):</label>
        <input type="number" step="0.01" name="peso" required><br>
        
        <label>Altura (m):</label>
        <input type="number" step="0.01" name="altura" required><br>
        
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{ url('/') }}"><button>Voltar para a Home</button></a>
@endsection