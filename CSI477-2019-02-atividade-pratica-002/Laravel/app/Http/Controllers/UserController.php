<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function create(){
        return view('TelaLogin.cadastro');
    }
    public function store(Request $request){
        $user = new User;
        $user->fill($request->all());
        $user->type = 1;
        $user->save();

        return redirect()->route('site.login');
    }
}
