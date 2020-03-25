@extends('layouts.store')

@section('title', 'Produto')

@section('content')
    <section class="container section">
        <div class="section__title">
            <h2>Produto</h2>
        </div>
        <div class="section__content">
            <div class="section__wrapper">
                <div class="section__left">
                    @if($product->photos()->first()->image)
                    <img class="product__image" src="{{asset('storage/'.$product->photos()->first()->image)}}" alt="{{$product->name}}">
                    @else
                    <img class="product__image" src="https://via.placeholder.com/260" alt="{{$product->name}}">
                    @endif
                </div>
                <div class="section__right">
                    <div class="products__info">
                        <p class="products__category">{{$product->categories()->first()->name}}</p>
                        <h1 href="{{route('product', ['slug' => 'teste'])}}" class="products__title">{{$product->name}}</h1>
                        <p class="products__price">R$ {{number_format($product->price, 2, ',', '.')}}</p>
                        <p class="products__description">{{$product->description}}</p>
                    </div>
                    <button class="products__add-cart">
                        <span class="fas fa-shopping-cart products__add-icon"></span>Adicionar ao carrinho
                    </button>
                </div>
            </div>
            <div class="products__details">
                <h3 class="products__details-title">Detalhes</h3>
                <p class="products__detail">{{$product->body}}</p>
            </div>
        </div>
    </section>
@endsection
