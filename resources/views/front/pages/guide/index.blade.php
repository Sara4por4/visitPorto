@extends ('front.layout.app')

@section('content')
<section>
  <div class="container">

    <div class="guide-header">
      <a class="link-sec link-sec--left" href="/"><span class="icon icon--caret-left"></span>voltar</a>
      <h1 class="guide-header__subtitle text text--bold text--caps">Meu guia</h1>
      <myguide></myguide>
    </div>

    <div class="guide-box intro">
      <div class="guide-box__container">
        <div class="container--shrink">
          <h4 class="guide-box__title section-title">Guarde o seu itinerário personalizado</h4>
          <div class="big-text editable">
            <p>Navegue no VisitPorto & The North e guarde as atividades na sua área
            do MEU GUIA. Para criar um Plano de Viagem, é necessário atribuir
            um nome primeiro e só depois associar a cada dia/hora</p>
          </div>
          <hr>
          @include('front.forms.account-form')
        </div>
      </div>
    </div>

    <div class="guide-footer clearfix">
      <ul class="guide-footer__menu">
        <li class="active">
          <a href="/" class="text"><span>01</span>Criar guia</a>
        </li>
        <li>
          <a href="guide-2" class="text"><span>02</span>Editar guia</a>
        </li>
        <li>
          <a href="guide-3" class="text"><span>03</span>Concluir</a>
        </li>
      </ul>
      <button onclick="window.location.href='guide-2'" class="btn btn--blue" type="button" name="button">Iniciar <span class="icon icon--arrow-down"></span></button>
    </div>
</div>

</section>


@endsection
