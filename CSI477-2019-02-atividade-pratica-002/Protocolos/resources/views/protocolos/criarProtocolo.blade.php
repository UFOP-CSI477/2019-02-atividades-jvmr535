<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends('welcome')


@section('conteudo')
    <form method="post" action="{{route('site.criarProtocolo.cadastrar')}}">
        @csrf 
        <p>Nome: <input type="text" name="name"></p> 
        <p>Preço: <input type="number" step="0.01" name="price"></p>    

        <input type="submit" name="btnSalvar" value="Criar">

    </form>
@endsection

