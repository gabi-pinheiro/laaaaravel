@extends('template.default')
@section('content')

<h1> Nossos produtos </h1>
<ul class="lista-produtos">
    @foreach ($produto as $row)
    <li>
        <div class="details"> 
            <h2>{{$row->produto>}}</h2>
            <p>{{$row->valor}}</p>
            <div class="product">
            <img src="{{url('img/bataum.jpg')}}"> 
            </div>
        </div>
    </li>
    @endforeach
</ul>


@endsection