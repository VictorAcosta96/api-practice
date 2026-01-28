@extends('layouts.app')

@section('content')
    <div>
        <h1>Edit External User</h1>
        <form method="POST" action="{{ route('external-users.update', $user['id']) }}">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $user['title'] }}" required>
            </div>
            <div>
                <label for="content">Content:</label>
                <input type="text" id="content" name="content" value="{{ $user['content'] }}" required>
            </div>
            <button type="submit">Update Note</button>
        </div>

@endsection
