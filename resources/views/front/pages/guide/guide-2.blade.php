@extends ('front.layout.app')

@section('content')
<section>
  <div class="container">

    <div class="guide-header">
      <a class="link-sec link-sec--left" href="/guide"><span class="icon icon--caret-left"></span>voltar</a>
      <h1 class="guide-header__subtitle text text--bold text--caps">Meu guia</h1>
      <h2 class="guide-header__subtitle text">Criar guia</h2>
      <myguide></myguide>
    </div>

    <div class="guide-box intro">
      <div class="guide-box__container">
        <div class="container--shrink">
          <h4 class="guide-box__title  section-title">Crie o seu itinerário personalizado</h4>
          <div class="big-text editable">
            <p>Navegue no VisitPorto & The North e guarde as atividades na sua área
            do MEU GUIA. Para criar um Plano de Viagem, é necessário atribuir
            um nome primeiro e só depois associar a cada dia/hora</p>
          </div>
          <hr>
          @include('front.forms.guide-form')
        </div>
      </div>
    </div>

    <div class="guide-footer clearfix">
      <ul class="guide-footer__menu">
        <li class="active">
          <a href="/guide" class="text"><span>01</span>Criar guia</a>
        </li>
        <li>
          <a href="guide-3" class="text"><span>02</span>Editar guia</a>
        </li>
        <li>
          <a href="guide-4" class="text"><span>03</span>Concluir</a>
        </li>
      </ul>
      <button onclick="window.location.href='guide-3'" class="btn btn--blue" type="button" name="button">Editar <span class="icon icon--arrow-down"></span></button>
    </div>
</div>

</section>

@endsection
