<!-- <!DOCTYPE html>
<html>
<head>
    <title>Add Character</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body> -->

@extends('helloworld')
@section('title', 'Add characters')
@section('content')

    <div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
        Add Character //
        </div>
        <div class="card-body">
        <form enctype="multipart/form-data" name="add-character-form" id="add-character-form" method="post" action="{{url('store-character-form')}}">
        @csrf
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required="">
            </div>
            <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" required=""></textarea>
            </div>
            <div class="form-group">
            <label for="image_link">Image</label>
            <input type="file" id="image_link" name="image_link" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    </div>  

    @endsection
<!-- </body>
</html> -->