@extends('layouts.store')

@section('content')
<header class="header container">
    <aside class="categories">
        <h2 class="categories__title">Categorias</h2>
        <ul class="categories__list">
            @forelse ($categories as $category)
            <li class="categories__item">
                <a href="#" class="categories__link">{{$category->name}}</a>
            </li>
            @empty
            <li>Não existe uma categoria</li>
            @endforelse
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

@if($newProducts->count())
<section class="products">
    <div class="container">
        <h1 class="products__section-title">Novos Produtos</h1>
        <ul class="products__list">
            @foreach($newProducts as $product)
            <li class="products__item">
                <a href="{{route('product', ['slug' => $product->slug])}}">
                    @if($product->photos()->count() && $product->photos()->first()->image)
                    <img class="products__image" src="{{asset('storage/'.$product->photos()->first()->image)}}" alt="{{$product->name}}">
                    @else
                    <img class="products__image" src="https://via.placeholder.com/260" alt="{{$product->name}}">
                    @endif
                </a>
                <div class="products__info">
                    <p class="products__category">{{$product->categories()->first()->name ?? 'Sem categoria'}}</p>
                    <a href="{{route('product', ['slug' => $product->slug])}}" class="products__title">{{$product->name}}</a>
                    <p class="products__price">R$ {{number_format($product->price, 2, ',', '.')}}</p>
                </div>
                <a href="{{route('product', ['slug' => $product->slug])}}" class="products__button">
                    <span class="fas fa-eye products__button-icon"></span>Detalhes do produto
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif
@if($featuredProducts->count())
<section class="products">
    <div class="container">
        <h1 class="products__section-title">Produtos em destaque</h1>
        <ul class="products__list">
            @foreach($featuredProducts as $product)
            <li class="products__item">
                <a href="{{route('product', ['slug' => $product->slug])}}">
                    @if($product->photos()->count() && $product->photos()->first()->image)
                    <img class="products__image" src="{{asset('storage/'.$product->photos()->first()->image)}}" alt="{{$product->name}}">
                    @else
                    <img class="products__image" src="https://via.placeholder.com/260" alt="{{$product->name}}">
                    @endif
                </a>
                <div class="products__info">
                    <p class="products__category">{{$product->categories()->first()->name ?? 'Sem categoria'}}</p>
                    <a href="{{route('product', ['slug' => $product->slug])}}" class="products__title">{{$product->name}}</a>
                    <p class="products__price">R$ {{number_format($product->price, 2, ',', '.')}}</p>
                </div>
                <a href="{{route('product', ['slug' => $product->slug])}}" class="products__button">
                    <span class="fas fa-eye products__button-icon"></span>Detalhes do produto
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif
@endsection
