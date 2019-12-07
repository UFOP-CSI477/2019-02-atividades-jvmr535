<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Requet;
use App\User;

class ProtocoloController extends Controller
{
    public function criar(){
        return view('protocolos.criarProtocolo');
    }

    public function store(Request $request){
        
        $s = new Subject;
        $s->name = $request->name;
        $s->price = $request->price;
        $s->save();

        return redirect()->route('site.criarProtocolo');
    }

    public function listar(){
        $subject = Subject::orderBy('name')->get();
        return view('protocolos.listarProtocolos', compact('subject'));
    }

    public function listarProtocolos(){
        $subject = Subject::orderBy('name')->get();
        return view('protocolos.listarProtocolos', compact('subject'));
    }

    public function requisitar(){
        $subject = Subject::orderBy('name')->get();
        $user = User::orderBy('name')->get();
        return view('protocolos.requisitarProtocolo', compact('subject', 'user'));   
    }

    public function requisitarAcao(Request $request){
        $requet = new Requet;
        $requet->subject_id = $request->subject_id;
        $requet->user_id = $request->user_id;
        $requet->description = $request->description;
        $requet->date = $request->date;
        $requet->save();
        
        return redirect()->route('site.requisitarProtocolo');
    }

}