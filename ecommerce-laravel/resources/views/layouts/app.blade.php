<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App Name - @yield('title')</title>
</head>
<body>

<h1>Main Site</h1>

@include('admin.layouts.menu')

<div class="container">
    @yield('content')
</div>

</body>
</html>