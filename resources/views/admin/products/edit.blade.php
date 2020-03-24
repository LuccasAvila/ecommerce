@extends('layouts.admin')

@section('title', 'Editando o produto #'.$product->id)

@section('content')
<form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST" enctype="multipart/form-data" class="section container">
    @csrf
    @method('PUT')
    <div class="section__title">
        <h1>Editando produto #{{$product->id}}</h1>
    </div>
    <div class="section__container">
        <div class="input__control">
            <label class="input__label">Nome</label>
            <input class="input" name="name" type="text" value="{{$product->name}}"/>
            @error('name')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Descrição</label>
            <input class="input" name="description" type="text" value="{{$product->description}}"/>
            @error('description')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Detalhes</label>
            <textarea class="input" name="body">{{$product->body}}</textarea>
            @error('body')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Preço</label>
            <input class="input" name="price" type="text" value="{{$product->price}}"/>
            @error('price')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Categorias</label>
            <select class="input" name="categories[]" multiple>
                @foreach ($categories as $category)
                <option value="{{$category->id}}"@if($product->categories->contains($category)) selected @endif>{{$category->name}}</option>
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
            @error('files.*')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input__control">
            <label class="input__label">Slug</label>
            <input class="input" name="slug" type="text" value="{{$product->slug}}"/>
            @error('slug')
            <div class="input__error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="button button--secondary button--form">Atualizar produto</button>
    </div>
</form>

<div class="product__images container">
    @foreach($product->photos as $photo)
    <form method="POST" action="{{route('admin.productPhoto.delete')}}">
        @csrf
        <input type="hidden" name="photoName" value="{{$photo->image}}">
        <button type="submit" class="product__delete-image" style="background: url('{{asset('storage/'.$photo->image)}}') no-repeat center center / cover;">
            <div class="delete">
                <span>&times;</span>
            </div>
        </button>
    </form>
    @endforeach
</div>
@endsection
