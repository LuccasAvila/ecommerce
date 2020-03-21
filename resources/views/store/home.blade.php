@extends('layouts.store')

@section('content')
<header class="header container">
    <aside class="categories">
        <h2 class="categories__title">Categorias</h2>
        <ul class="categories__list">
            @foreach ($categories as $category)
            <li class="categories__item">
                <a href="#" class="categories__link">{{$category->name}}</a>
            </li>
            @endforeach
            <li class="categories__item">
                <a href="#" class="categories__link">Ver todas categorias</a>
            </li>
        </ul>
    </aside>
    <div class="banner">
        <img class="banner__item" src="https://via.placeholder.com/840x400" alt="Title">
    </div>
</header>

<section class="cards">
    <ul class="cards__list container">
       <li class="cards__item">
            <div class="cards__icon">
                <span class="fas fa-shipping-fast"></span>
            </div>
            <div class="cards__info">
                <p class="cards__title">Lorem, ipsum dolor.</p>
                <p class="cards__text">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
       </li>
       <li class="cards__item">
            <div class="cards__icon">
                <span class="fas fa-shipping-fast"></span>
            </div>
            <div class="cards__info">
                <p class="cards__title">Lorem, ipsum dolor.</p>
                <p class="cards__text">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </li>
        <li class="cards__item">
            <div class="cards__icon">
                <span class="fas fa-shipping-fast"></span>
            </div>
            <div class="cards__info">
                <p class="cards__title">Lorem, ipsum dolor.</p>
                <p class="cards__text">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </li>
        <li class="cards__item">
            <div class="cards__icon">
                <span class="fas fa-shipping-fast"></span>
            </div>
            <div class="cards__info">
                <p class="cards__title">Lorem, ipsum dolor.</p>
                <p class="cards__text">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </li>
    </ul>
</section>

<section class="products">
    <div class="container">
        <h1 class="products__section-title">Novos Produtos</h1>
        <ul class="products__list">
            <li class="products__item">
                <img class="products__image" src="https://via.placeholder.com/260" alt="Product">
                <div class="products__info">
                    <p class="products__category">Categoria</p>
                    <p class="products__title">Lorem ipsum</p>
                    <p class="products__price">R$ 00,00</p>
                </div>
                <button class="products__add-cart">
                    <span class="fas fa-shopping-cart products__add-icon"></span>Adicionar ao carrinho
                </button>
            </li>
        </ul>
    </div>
</section>
@endsection
