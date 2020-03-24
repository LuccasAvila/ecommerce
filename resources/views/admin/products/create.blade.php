@extends('layouts.admin')

@section('title', 'Novo Produto')
@section('content')
    <div class="section container">
        <div class="section__title">
            <h1>Novo produto</h1>
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
                <label class="input__label">Detalhes</label>
                <textarea class="input" name="body">{{old('body')}}</textarea>
                @error('body')
                <div class="input__error">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input__control">
                <label class="input__label">Preço</label>
                <input class="input" name="price" type="text" value="{{old('price')}}"/>
                @error('price')
                <div class="input__error">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input__control">
                <label class="input__label">Categorias</label>
                <select class="input" name="categories" multiple>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('categories')
                <div class="input__error">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input__control">
                <label class="input__label">Imagens</label>
                <input class="input" name="files[]" type="file"/>
                @error('files')
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
    </div>
@endsection
