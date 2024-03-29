<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    {
        box-sizing: border-box;
    }
    /* Set additional styling options for the columns*/
    .column {
    float: left;
    width: 200px;
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    </style>
</head>
<body>
        <H1>Welcome to Genshin Impact characters info!</H1>

    <div>
        <a href="{{ url('add-character-form') }}">Add character</a>
    </div>
    <div>
        <a href="{{ url('view-characters') }}">View characters</a>
    </div>
    <div>
        <a href="{{ url('view-by-element') }}">View anemo characters</a>
    </div>
    <!-- <div>
        <a href="{{ url('add-character-form') }}">Add character</a>
    </div> -->
    <div class="container page">
        @yield('content')
    </div>
    @yield('scripts')
    
</body>
</html>