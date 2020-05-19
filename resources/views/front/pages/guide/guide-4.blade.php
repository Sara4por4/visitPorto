@extends ('front.layout.app')

@section('content')
<section>
  <div class="container">

    <div class="guide-header">
      <a class="link-sec link-sec--left" href="/guide-3"><span class="icon icon--caret-left"></span>voltar</a>
      <h1 class="guide-header__subtitle text text--bold text--caps">Meu guia</h1>
      <myguide></myguide>
    </div>

    <div class="guide-box intro">
      <div class="guide-box__container">
        <div class="container--shrink">
          <h4 class="guide-box__title section-title">Tarefa concluída!</h4>
          <div class="big-text editable">
            <p>Navegue no VisitPorto & The North e guarde as atividades na sua área
            do MEU GUIA. Para criar um Plano de Viagem, é necessário atribuir
            um nome primeiro e só depois associar a cada dia/hora</p>
          </div>
          <div class="guide-box__btns">
            <button class="btn btn--blue" type="button" name="button">Enviar<span class="icon icon--email"></span></button>
            <button class="btn btn--blue" type="button" name="button">Imprimir<span class="icon icon--printer"></span></button>
          </div>
        </div>
      </div>
    </div>

    <div class="guide-footer clearfix">
      <ul class="guide-footer__menu">
        <li>
          <a href="guide" class="text"><span>01</span>Criar guia</a>
        </li>
        <li>
          <a href="guide-2" class="text"><span>02</span>Editar guia</a>
        </li>
        <li class="active">
          <a href="/" class="text"><span>03</span>Concluir</a>
        </li>
      </ul>
      <button onclick="window.location.href='/'" class="btn btn--blue" type="button" name="button">Voltar à Homepage</button>
    </div>
</div>

</section>

@endsection
