@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
<h1>Usuário {{ $user->name }}</h1>

<ul>
    <li>Nome: {{ $user->name }}</li>
    <li>Email: {{ $user->email }}</li>
    <li>Data Criação: {{ $user->created_at }}</li>
</ul>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
@endsection