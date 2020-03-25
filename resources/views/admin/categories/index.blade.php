@extends('layouts.admin')

@section('title', 'Categorias')
@section('content')
<div class="section container">
    <div class="section__title">
        <h1>Categorias</h1>
        <a class="button button--primary" href="{{route('admin.categories.create')}}">
            <span class="fas fa-plus"></span> Adicionar novo
        </a>
    </div>
    <table class="section__table">
        <thead>
            <tr class="table__header">
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="{{route('admin.categories.edit', ['category' => $category->id])}}" class="table__action table__action--primary"><span class="fas fa-pen"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories}}
</div>
@endsection
