@extends('layouts.admin')

@section('title', 'Editando categoria #'.$category->id)
@section('content')
<form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="POST" class="section container">
    @csrf
    @method('PUT')
    <div class="section__title">
        <h1>Editando categoria #{{$category->id}}</h1>
    </div>
    <div class="section__container">
        <div class="input__control">
            <label class="input__label">Nome</label>
            <input class="input" name="name" type="text" value="{{$category->name}}"/>
            @error('name')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Descrição</label>
            <input class="input" name="description" type="text" value="{{$category->description}}"/>
            @error('description')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Slug</label>
            <input class="input" name="slug" type="text" value="{{$category->slug}}"/>
            @error('slug')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="button button--secondary button--form">Atualizar categoria</button>
    </div>
</form>
@endsection
