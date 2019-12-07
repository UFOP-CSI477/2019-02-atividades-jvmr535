@extends('welcome')

@section('pageTitle', 'Pagina Principal')
@section('conteudo')
    <table class="table table-striped table-bordered">
        <thead class="table-light">
        <tr>
            <th>Nome</th>      
            <th>Preço</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($subject as $s)
        <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->price }}</td>
            <a class="btn btn btn-warning" href="{{route('site.subject.editar', $s->id)}}">Editar</a>
            <a class="btn btn-danger" href="{{route('site.subject.deletar', $s->id)}}">Deletar</a>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">