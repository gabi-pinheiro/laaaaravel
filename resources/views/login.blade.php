@extends('template.default')
@section('content')

<div class="overlay-container"></div>
<div class="overlay"></div>
<div class="form">
    <h1> Faça seu login </h1>
    <form> 
        <input type="email" name="email-login" id="" placeholder="E-mail">
        <br>
        <input type="password" name="senha-login" id="" placeholder="Senha">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <a href="#">Esqueci minha senha</a>
    <p>ainda não tem uma conta? <a href="/cadastro">Cadastre-se</a></p>

</div>

@endsection