@extends('layouts.store')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="section">
        <div class="section__title">
            <h1>Login</h1>
        </div>
        <div class="section__content">
            <form action="{{route('doLogin')}}" method="POST" class="form">
                @csrf
                <div class="input__control">
                    <label class="input__label">E-mail</label>
                    <input class="input" placeholder="E-mail" name="email" type="email" value="{{old('email')}}"/>
                </div>
                <div class="input__control">
                    <label class="input__label">Senha</label>
                    <input class="input" placeholder="********" name="password" type="password" value="{{old('password')}}"/>
                    <div class="input__error">
                        {{ $errors->first('password') }}
                    </div>
                </div>
                <div class="form__actions">
                    <a class="form__action" href="#">Esqueci minha senha</a>
                    <a class="form__action" href="#">Não tenho uma conta</a>
                </div>
                <button class="button button--secondary button--form">Entrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
