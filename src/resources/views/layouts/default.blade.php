<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    @yield('css')
</head>

<body>
    <h1>@yield('title')</h1>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>