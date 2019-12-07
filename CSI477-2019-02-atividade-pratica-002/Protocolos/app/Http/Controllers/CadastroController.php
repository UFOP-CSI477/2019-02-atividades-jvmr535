<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class CadastroController extends Controller
{
    public function index(){
        return view('LoginCadastro.cadastro');
    }

    public function store(Request $request){
        $user = new User;
        $user->fill($request->all());
        $user->type = 1;
        $user->save();

        return redirect()->route('site.login');
    }
}
