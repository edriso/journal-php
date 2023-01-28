<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark px-2">
            <a href="/" class="navbar-brand">Journal</a>
            <a class="nav-link text-white" href="{{route('posts.index')}}"><small>All Posts</small></a>
        </nav>
    </header>

    <main class="container py-3">
        @yield('content')
    </main>
</body>

</html>