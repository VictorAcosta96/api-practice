@extends('layouts.app')

@section('content')

    <a href="{{route('external-users.create')}}">Create New Note</a>
    <div class="container">
        <h1>External Users</h1>
        <ul>
            @foreach ($notes as $note)
                <li>{{ $note['title'] }} - {{ $note['content'] }}
                | <a href="{{route('external-users.show', $note['id'])}}">show</a>
                | <a href="{{route('external-users.edit', $note['id'])}}">edit</a>
                <form method="POST" action="{{route('external-users.destroy', $note['id'])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
