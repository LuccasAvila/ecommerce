@extends('layouts.store')

@section('title', 'Carrinho')

@section('content')
<div class="container">
    <div class="section">
        <div class="section__title">
            <h1>Meu carrinho</h1>
        </div>
        <div class="section__content">
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
                    <tr>
                        <td><img src="https://via.placeholder.com/72" alt="Product"></td>
                        <td>R$ 15,00</td>
                        <td>1</td>
                        <td>R$ 15,00</td>
                        <td><a href="#"><span class="fas fa-trash"></span></a></td>
                    </tr>
                </tbody>
            </table>
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
                            <td>Subtotal</td>
                            <td>R$ 0,00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>R$ 0,00</td>
                        </tr>
                    </tbody>
                </table>
                <a class="button button--secondary" href="#">Finalizar compras</a>
            </div>
        </div>
    </div>
</div>
@endsection
