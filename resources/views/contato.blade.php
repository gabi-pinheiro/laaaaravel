@extends('template.default')
@section('content')

<div class="overlay-container"></div>
<div class="overlay"></div>
<div class="form">
    <h1> Entre em contato com a gente</h1>
    <form action="{{url('/contato/inserir')}}" method="post"> 
        {{csrf_field()}}
        <input type="text" name="txNome" id="" placeholder="Nome Completo">
        <br>
        <input type="email" name="txEmail" id="" placeholder="E-mail para resposta">
        <br>
        <input type="tel" name="txFone" id="" placeholder="Telefone">
        <br>
        <textarea name="txMensagem" id="" cols="30" rows="10"  placeholder="Escreva sua mensagem"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <div class="forma">
        <b> <p> Comentários </p> </b>
        @foreach ($contato as $row)
        <hr>
        <p> {{$row->nomeCliente}} </p>
        <p> {{$row->mensagemCliente}} </p> 
             <a href="/contato/{{$row->idContato}}"> Excluir </a>
         @endforeach

    </div>
</div>

@endsection