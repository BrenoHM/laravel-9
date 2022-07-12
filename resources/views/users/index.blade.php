@extends('layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')
    <h1>Listagem dos usuários</h1>
    <a href="{{ route('users.create') }}">Novo usuário</a>

    <form action="{{ route('users.index') }}">
        <input type="text" name="search" id="search">
        <button type="submit">Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}} 
                <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                <a href="{{ route('users.comments', $user->id) }}">Comentários</a>
            </li>
        @endforeach
    </ul>    
@endsection
