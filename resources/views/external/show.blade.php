@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>External Note Details</h1>
        <p><strong>Title:</strong> {{ $note['title'] }}</p>
        <p><strong>Content:</strong> {{ $note['content'] }}</p>

        <a href="{{ url('/external-users') }}">Back to Notes List</a>
    </div>
@endsection
