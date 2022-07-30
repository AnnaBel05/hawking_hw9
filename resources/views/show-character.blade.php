@extends('helloworld')
@section('title', 'Show character')
@section('content')

<div class="row">
    <div>
        <strong>Name: </strong> {{ $character->name }}
    </div>
</div>

<div class="row">
    <div>
        <strong>Description: </strong> {{ $character->description }}
    </div>
</div>

<div class="row">
    <div>
        <strong>Image: </strong> <img src="{{ url('/storage/' . $character->image_link) }}" width="200px">
    </div>
</div>

@endsection