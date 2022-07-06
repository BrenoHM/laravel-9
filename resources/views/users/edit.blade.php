@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
<h1>Editar Usuário</h1>

@if ($errors->any())
<ul>
   @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>  
   @endforeach 
</ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="name" id="name" placeholder="Nome:" value="{{ $user->name }}">
    <input type="email" name="email" id="email" placeholder="Email:" value="{{ $user->email }}">
    <input type="password" name="password" id="password" placeholder="Senha:">
    <button type="submit">Enviar</button>
</form>
@endsection