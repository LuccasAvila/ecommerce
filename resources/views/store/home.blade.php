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
@endsection
