{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
@extends('welcome')

@section('conteudo')

<form method="post" action="{{route('site.requisitarProtocoloAcao') }}">
    @csrf 
    
    <p>Nome do Protocolo: </p>

    <select name="subject_id">
      @foreach ($subject as $s)
        <option value="{{ $s->id }}">{{ $s->name }}</option>
      @endforeach
    </select>  

    <p>Nome do Usuario: </p>

    <select name="user_id">
      @foreach ($user as $u)
        <option value="{{ $u->id }}">{{ $u->name }}</option>
      @endforeach
    </select> 
    
    <p></p>
    
    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm">Descrição</span>
      </div>
      <input type="text" class="form-control" name="description"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{isset($registro->description) ? $registro->description : ''}}">  
  </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm">Data:</span>
      </div>
      <input type="date" class="form-control" name="date"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{isset($registro->date) ? $registro->date : ''}}">  
  </div>

    <input type="submit" name="btnRequisitar" value="Requesitar">

</form>

@endsection

