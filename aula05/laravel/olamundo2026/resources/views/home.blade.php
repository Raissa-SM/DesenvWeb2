@extends('layout.principal')
@section('titulo', $titulo)
@section('content')

<h1 style="text-align: center"><?php echo $titulo?></h1>
<br>
<ul>
    <li>
        <a href="{{ url('/') }}">Home</a>
    </li>
    <li>

        <a href="{{ url('sobre') }}">Sobre</a>
    </li>
    <li>
        <a href="{{ url('contato') }}">Contato</a>
    </li>
</ul>
<br>
<hr>
<br>
Script laravel {{ $script }} executado com sucesso {{ $datahora }}
@endsection