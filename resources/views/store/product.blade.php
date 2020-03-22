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
                    <img src="https://via.placeholder.com/260" alt="Product">
                </div>
                <div class="section__right">
                    <div class="products__info">
                        <p class="products__category">Categoria</p>
                        <h1 href="{{route('product', ['slug' => 'teste'])}}" class="products__title">Lorem ipsum</h1>
                        <p class="products__price">R$ 00,00</p>
                    </div>
                    <button class="products__add-cart">
                        <span class="fas fa-shopping-cart products__add-icon"></span>Adicionar ao carrinho
                    </button>
                </div>
            </div>
            <div class="products__details">
                <h3 class="products__details-title">Detalhes</h3>
                <p class="products__detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus praesentium aliquam minima sed corrupti eum quaerat eveniet delectus odio libero rem, doloribus explicabo culpa perferendis odit facilis id iste eius?</p>
            </div>
        </div>
    </section>
@endsection
