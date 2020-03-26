@extends('layouts.store')

@section('title', 'Carrinho')

@section('content')
<div class="container">
    <div class="section">
        <div class="section__title">
            <h1>Meu carrinho</h1>
        </div>
        <div class="section__content">
            @if($cart)
            <table class="cart__list">
                <thead>
                    <tr class="cart__header">
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cart as $item)
                    @php
                        $subtotal = $item->price * $item->amount;
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td><img class="cart__image" src="{{asset('storage/'.$item->photos()->first()->image)}}" alt="Product"></td>
                        <td>R$ {{number_format($item->price, 2, ',', '.')}}</td>
                        <td>{{$item->amount}}</td>
                        <td>R$ {{number_format($subtotal, 2, ',', '.')}}</td>
                        <td><a href="{{route('cart.remove', ['product' => $item->id])}}"><span class="fas fa-trash"></span></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="alert">Não há nenhum item no carrinho!</div>
            @endif
            @if($cart)
            <div class="section__row">
                <div class="coupon">
                    <input class="coupon__input" placeholder="Adicione um cupom de desconto" type="text">
                    <button class="coupon__button button--primary">Aplicar</button>
                </div>
                <button class="button button--primary">Atualizar carrinho</button>
            </div>
            <div class="section__footer">
                <table class="cart__total">
                    <tbody>
                        <tr>
                            <td>Total</td>
                            <td>R$ {{number_format($total, 2, ',', '.')}}</td>
                        </tr>
                    </tbody>
                </table>
                <a class="button button--secondary" href="#">Finalizar compras</a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
