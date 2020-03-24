@extends('layouts.admin')

@section('title', 'Produtos')

@section('content')
<div class="section container">
    <div class="section__title">
        <h1>Produtos</h1>
        <a class="button button--primary" href="{{route('admin.products.create')}}">
            <span class="fas fa-plus"></span> Adicionar novo
        </a>
    </div>
    <table class="section__table">
        <thead>
            <tr class="table__header">
                <th>#</th>
                <th>Preview</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Visível</th>
                <th>Destaque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="https://via.placeholder.com/72" alt="Product"></td>
                <td>Lorem ipsum dolor sit amet.</td>
                <td>R$ 0,00</td>
                <td><span class="fas fa-check"></span></td>
                <td><span class="fas fa-times"></span></td>
                <td>
                    <button class="table__action table__action--primary"><span class="fas fa-pen"></span></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
