<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index() {
        return view('store.login');
    }

    public function doLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        $validator = $this->validator($credentials);

        if($validator->fails()) {
            return redirect()->route('login')
            ->withErrors($validator)
            ->withInput();
        }

        if(Auth::attempt($credentials, true)) {
            return redirect()->intended(route('home'));
        } else {
            $validator->errors()->add('password', 'E-mail ou/e senha incorretos');
            return redirect()->route('login')
            ->withErrors($validator)
            ->withInput();
        }
    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }
}
