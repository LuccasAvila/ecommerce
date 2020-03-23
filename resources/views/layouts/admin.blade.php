<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '') | Área administrativa</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
    <script defer src="/js/all.min.js"></script></head>
<body>
    <nav class="navbar">
        <div class="navbar__content container">
            <div class="navbar__logo">
                <h1 class="navbar__logo-text">
                    <span class="text--secondary">E</span>COMMERCE
                </h1>
            </div>
            <ul class="navbar__links">
                @admin
                <li><a class="navbar__link" href="{{route('admin.index')}}">Pedidos</a></li>
                <li><a class="navbar__link" href="{{route('admin.products.index')}}">Produtos</a></li>
                <li><a class="navbar__link" href="#">Usuários</a></li>
                @else
                <li><a class="navbar__link" href="{{route('admin.login')}}">Entrar</a></li>
                @endadmin
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>
