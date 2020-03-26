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
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>
                @if($product->photos() && $product->photos()->first()->image)
                <img class="products__image" src="{{asset('storage/'.$product->photos()->first()->image)}}" alt="{{$product->description}}">
                @else
                <img class="products__image" src="https://via.placeholder.com/72" alt="{{$product->description}}">
                @endif
                </td>
                <td>{{$product->name}}</td>
                <td>R$ {{$product->price}}</td>
                <td>
                    <a href="{{route('admin.products.visible', ['product' => $product->id])}}">
                        @if($product->visible)
                        <span class="fas fa-check"></span>
                        @else
                        <span class="fas fa-times"></span>
                        @endif
                    </a>
                </td>
                <td>
                    <a href="{{route('admin.products.featured', ['product' => $product->id])}}">
                        @if($product->featured)
                        <span class="fas fa-check"></span></a>
                        @else
                        <span class="fas fa-times"></span>
                        @endif
                    </a>
                </td>
                <td>
                    <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="table__action table__action--primary"><span class="fas fa-pen"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$products}}
</div>
@endsection
