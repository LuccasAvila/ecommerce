@extends('layouts.admin')

@section('title', 'Nova categoria')
@section('content')
<form action="{{route('admin.categories.store')}}" method="POST" class="section container">
    @csrf
    <div class="section__title">
        <h1>Nova categoria</h1>
    </div>
    <div class="section__container">
        <div class="input__control">
            <label class="input__label">Nome</label>
            <input class="input" name="name" type="text" value="{{old('name')}}"/>
            @error('name')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Descrição</label>
            <input class="input" name="description" type="text" value="{{old('description')}}"/>
            @error('description')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Slug</label>
            <input class="input" name="slug" type="text" value="{{old('slug')}}"/>
            @error('slug')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="button button--secondary button--form">Salvar produto</button>
    </div>
</form>
@endsection
