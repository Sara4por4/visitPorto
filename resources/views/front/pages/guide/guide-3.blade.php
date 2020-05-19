@extends ('front.layout.app')

@section('content')
<section>
  <div class="container">

    <div class="guide-header">
      <a class="link-sec link-sec--left" href="/guide-2"><span class="icon icon--caret-left"></span>voltar</a>
      <h1 class="guide-header__subtitle text text--bold text--caps">Meu guia</h1>
      <h2 class="guide-header__subtitle text">Nome do itinerário</h2>
      <myguide></myguide>
    </div>

    <div class="guide-box itinerary">
      <div class="itinerary__header">
        <ul>
          <li class="active">
            <button class="day-btn" type="button" name="button"><span>07</span> Seg</button>
          </li>
          <li>
            <button class="day-btn" type="button" name="button"><span>07</span> Seg</button>
          </li>
          <li>
            <button class="day-btn" type="button" name="button"><span>07</span> Seg</button>
          </li>
        </ul>
      </div>
      <div class="itinerary__container">
        <ul class="itinerary__list">
          <li class="clearfix">
            <product></product>
            <div class="itinerary__btns">
              <a href="poi" class="itinerary__info icon icon--info"></a>
              <button type="button" name="button" class="icon icon--garbage"></button>
            </div>
          </li>
        </ul>
        <!-- bar -->
        <div class="stop-bar">
          <img src="front/img/icons/food.svg" alt="">
          <p class="tiny-text tiny-text--caps">lunch time</p>
        </div>
        <!-- bar -->
        <ul class="itinerary__list">
          <li class="clearfix">
            <product></product>
            <div class="itinerary__btns">
              <a href="poi" class="itinerary__info icon icon--info"></a>
              <button type="button" name="button" class="icon icon--garbage"></button>
            </div>
          </li>
        </ul>
        <!-- bar -->
        <div class="stop-bar">
          <img src="front/img/icons/food.svg" alt="">
          <p class="tiny-text tiny-text--caps">dinner time</p>
        </div>
        <!-- bar -->
        <ul class="itinerary__list">
          <li class="clearfix">
            <product></product>
            <div class="itinerary__btns">
              <a href="poi" class="itinerary__info icon icon--info"></a>
              <button type="button" name="button" class="icon icon--garbage"></button>
            </div>
          </li>
          <li class="clearfix">
            <product></product>
            <div class="itinerary__btns">
              <a href="poi" class="itinerary__info icon icon--info"></a>
              <button type="button" name="button" class="icon icon--garbage"></button>
            </div>
          <li class="clearfix">
            <product></product>
            <div class="itinerary__btns">
              <a href="poi" class="itinerary__info icon icon--info"></a>
              <button type="button" name="button" class="icon icon--garbage"></button>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="guide-footer clearfix">
      <ul class="guide-footer__menu">
        <li>
          <a href="guide" class="text"><span>01</span>Criar guia</a>
        </li>
        <li class="active">
          <a href="/" class="text"><span>02</span>Editar guia</a>
        </li>
        <li>
          <a href="guide-4" class="text"><span>03</span>Concluir</a>
        </li>
      </ul>
      <button onclick="window.location.href='guide-4'" class="btn btn--blue" type="button" name="button">Concluir <span class="icon icon--arrow-down"></span></button>
    </div>
</div>

</section>

@endsection
