<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | Ecommerce</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <script defer src="/js/all.min.js"></script>
</head>
<body>
    <nav class="navbar">
        @error('permission')
        <div class="navbar__error">
            <div class="container">
                {{ $message }}
            </div>
        </div>
        @enderror
        <div class="navbar__top">
            <div class="navbar__top-content container">
                <div class="navbar__top-left">
                    <div class="navbar__info">+55 00 0000-0000</div>
                    <div class="navbar__info">email@email.com</div>
                    <div class="navbar__info">0000 street zero</div>
                </div>
                <div class="navbar__top-left">
                    <div class="navbar__info">
                        @auth
                        <a class="text--secondary" href="{{route('login')}}">Minha conta</a>
                        @else
                        <a class="text--secondary" href="{{route('login')}}">Entrar</a> ou
                        <a class="text--secondary" href="#"> cadastrar</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar__content container">
            <div class="navbar__logo">
                <a href="{{route('home')}}">
                    <h1 class="navbar__logo-text"><span class="text--secondary">E</span>COMMERCE</h1>
                </a>
            </div>
            <div class="search">
                <input placeholder="Pesquisar..." class="search__input" type="text">
                <button class="search__button" type="submit"><span class="fas fa-search"></span></button>
            </div>
            <a href="{{route('cart.index')}}" class="navbar__cart">
                <div class="cart__icon">
                    <span class="fas fa-shopping-cart"></span>
                </div>
                <div class="cart__info">
                    <p class="cart__title">MEU CARRINHO</p>
                    @php
                        $cart = session()->get('cart') ?? [];
                        $total = 0;
                        foreach ($cart as $item) {
                            $total += $item['price'] * $item['amount'];
                        }
                    @endphp
                    <p class="cart__items">{{count($cart)}} item(s) - R$ {{number_format($total, 2, ',', '.')}}</p>
                </div>
            </a>
        </div>
    </nav>
    @yield('content')
</body>
</html>
