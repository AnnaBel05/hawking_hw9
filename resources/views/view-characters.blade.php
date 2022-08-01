@extends('helloworld')
@section('title', 'View characters')
@section('content')

<p>----------------------</p>
<p> Gallery </p>

<div class="container">
        <div class="row">
            @foreach($characters as $character)
            <div class="column" width="200px">
                <img src="{{ asset('/storage/' . $character->image_link) }}" width="200px">
            </div>
            @endforeach
        </div>
</div>

<p>----------------------</p>

<p> Auth </p>

<a href="{{ route( 'auth.social', 'facebook' ) }}" title="Facebook">
    <i class="fa fa-2x fa-facebook-square"></i>
</a>

<p>----------------------</p>

<div class="container">
    <div class="row">
        @foreach($characters as $character)
        <div>
            <img src="{{ asset('/storage/' . $character->image_link) }}" width="200px">
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