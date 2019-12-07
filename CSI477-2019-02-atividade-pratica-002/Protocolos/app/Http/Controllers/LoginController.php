<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('LoginCadastro.login');
    }

    public function entrar(Request $req){
        
        $dados = $req->all();

        if(Auth::attempt(['email'=> $dados['email'], 'password'=> $dados['password']])){
            return redirect()->route('site.home');
        }

        return redirect()->route('LoginCadastro.login');
    }

    public function sair(){
       Auth::logout();
       return redirect()->route('/login');
    }
}
