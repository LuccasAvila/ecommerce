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
                    @if($product->photos()->count() && $product->photos()->first()->image)
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
                    <form method="POST" action="{{route('cart.add')}}">
                        @csrf
                        <input type="hidden" name="product[id]" value="{{$product->id}}">
                        <input type="hidden" name="product[price]" value="{{$product->price}}">
                        <div class="input__control input__control--mini">
                            <label class="input__label">Quantidade</label>
                            <input class="input" placeholder="1" name="product[amount]" required type="number" min="1" max="10" default="1" value="{{old('product[amount]')}}"/>
                            @error('product[amount]')
                            <div class="input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @php
                            $cartItems = session()->has('cart') ?
                                array_column(session()->get('cart'), 'id') : [];
                        @endphp
                        @if(!in_array($product->id, $cartItems))
                        <button class="products__add-cart">
                            <span class="fas fa-shopping-cart products__add-icon"></span>Adicionar ao carrinho
                        </button>
                        @else
                        <button disabled class="products__add-cart">
                            <span class="fas fa-shopping-cart products__add-icon"></span>Produto já no carrinho
                        </button>
                        @endif
                    </form>
                </div>
            </div>
            <div class="products__details">
                <h3 class="products__details-title">Detalhes</h3>
                <p class="products__detail">{{$product->body}}</p>
            </div>
        </div>
    </section>
@endsection
