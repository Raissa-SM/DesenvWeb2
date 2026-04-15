<header>
    <h1>Detalhes do Contato - {{ $contato->nome }}</h1>
</header>
<div>
    <ul>
        <li>ID: {{ $contato->id }}</li>
        <li>Nome: {{ $contato->nome }}</li>
        <li>Email: {{ $contato->email }}</li>
        <li>Telefone: {{ $contato->telefone }}</li>
        <li>Cidade: {{ $contato->cidade }}</li>
        <li>Estado: {{ $contato->estado }}</li>
    </ul>
    <br>
    <a href="{{ route('contatos.index') }}">Voltar a list de Contatos</a>
</div>
