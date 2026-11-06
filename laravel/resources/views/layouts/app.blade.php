<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
])
</head>

<body>

@include('partials.navbar')

<div style="display:flex">

@include('partials.sidebar')

<div style="padding:20px">
    @yield('content')
</div>

</div>
<footer style="
margin-top:30px;
padding:15px;
text-align:center;
background:#f3f4f6;
">

Copyright 2026 Dashboard Mahasiswa

</footer>
</body>
</html>