@extends('helloworld')
@section('title', 'View characters')
@section('content')

<div class="container">
    <div class="row">
        @foreach($characters as $character)
        <div>
            <img src="{{ $character->image_link }}">
            <div>
                <p>{{ $character->name }}</p>
                <p>{{ strtolower($character->description) }}</p>
                <a class="btn" href="{{ url('redirects/'.$character->id) }}">Show character</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection