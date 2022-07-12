@extends('layouts.app')

@section('title', 'Comentários')

@section('content')
    <h1>Listagem dos comentários do {{ $user->name }}</h1>

    <ul>
        @foreach ($comments as $comment)
            <li>{{$comment->body}} </li>
        @endforeach
    </ul>    
@endsection
