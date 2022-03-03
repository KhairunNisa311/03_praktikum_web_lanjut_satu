<html>
    <head>
        <title>{{ $title }} </title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-secondary">
                @include('blog.header') 
</div>
</div>
        <div class="row">
            <div class="col-3 bg-info">
                @include('blog.sidebar') 
</div>
            <div class="col-9 bg-succes">
                @yield('content')
</div>
</div>  
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>