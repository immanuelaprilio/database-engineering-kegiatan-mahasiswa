<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>

<body>

@include('partials.navbar')

<div style="display:flex">

@include('partials.sidebar')

<div style="padding:20px">
    @yield('content')
</div>

</div>

</body>
</html>