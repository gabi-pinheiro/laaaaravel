@extends('template.default')
@section('content')


<div class="content-main">
    <div id="apresentacao">
        <h1> Seja bem vindo ao brechó Rêve D'amour! </h1>
        <p>
            Criado por dois estudantes nerds com gostos completamente opostos, o Brechó vintage <i>Rêve D'amour</i> 
            tem prazer em trazer peças autênticas e diferenciadas garimpadas ao redor do mundo, reformadas e prontas para uso! 
            <br>
            Tenha uma boa estadia em nossa loja, e que nossas roupas te ajudem a expressar quem você realmente é :)
        </p>
    </div>

    <div id="motivos">
        <div class="banner" id="secondary-banner">
        <img src="{{url('img/mulheresfelizes.jpeg')}}" >
        </div>
        <h1>Por que comprar no brechó?</h1>

        <h2><b>Economia</b></h2>
            <p>
                Roupas usadas, mesmo aquelas de marca, geralmente possuem preços muito mais acessíveis que roupas novas de loja.
                "Ah, mas eu não quero usar roupa velha" - <i>amore mio,</i> nossa curadoria se preocupa em sempre trazer peças vintage
                em bom estado de conservação, além de nos comprometermos a uma limpeza e reforma completa das peças, sempre preservando 
                suas qualidades de época.
            </p>

        <h2><b>Meio ambiente</b></h2>
            <p>
                Todos os anos, cerca de <b>500 bilhões</b> de dólares são perdidos com o descarte de roupas provenientes da "moda rápida". Além disso,
                milhares de litros sãp gastos para produzir uma única peça, sem falar em toda a poluição envolvida nos processos de manufatura e transporte. 
                E tem mais! Comprar roupas mais baratas e de menor qualidade ainda contribui com o trabalho escravo em regiões mais pobres, como o sudeste 
                asiático. Quando você consome roupas do brechó, está dando um novo uso a uma peça, aumentando seu ciclo de vida e diminuindo a confecção de 
                peças adicionais. 
            </p>

        <h2><b>Identidade</b></h2>
            <p>
                Ao contrário do que acontece nas grandes franquias de moda, no brechó você pode encontrar peças únicas, muitas vezes vindas de fora do país! 
                Aqui no <i>Rêve</i>, nosso foco é disponibilizar roupas que tenham estilo e história,e pode tercerteza de que você encontrará o que procura, ou 
                descobrirá que encontrou muuuuito mais. A variedade é um ponto no qual os brechós, mais uma vez, dão de dez nas lojas convencionais.
                <br>
            </p>
    </div>
</div>




@endsection