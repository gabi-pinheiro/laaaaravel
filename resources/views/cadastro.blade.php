@extends('template.default')
@section('content')

<div class="overlay-container"></div>
<div class="overlay"></div>
<div class="form">
    <h1> Cadastre-se </h1>
    <form> 
        <input type="text" name="" id="" placeholder="Nome">
        <br>
        <input type="email" name="" id="" placeholder="E-mail">
        <br>
        <input type="text" name="" id="" placeholder="Senha">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <p>Já tem uma conta? <a href="/login">Faça login</a></p>
</div>
</div>

@endsection