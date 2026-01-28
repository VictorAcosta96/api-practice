@extends('layouts.app')


@section('content')
    <div>
        <h1>Create External User</h1>
        <form method="POST" action="{{ route('external-users.store') }}">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="content">Content:</label>
                <input type="text" id="content" name="content">
            </div>
            <button type="submit">Create Note</button>
        </form>

    </div>
@endsection
