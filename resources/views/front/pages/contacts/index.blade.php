@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo15.png)"></div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle subtitle">ATP</h4>
      <h1 class="top-banner__big-title big-title">Contactos</h1>
    </div>
    <a href="#scrolldown" class="top-banner__scroll icon icon--arrow-down"></a>
  </div>
</div>
<!-- top banner -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <img class="contacts-card__logo" src="front/img/logos/logo-cor.svg" alt="">
        <div class="contacts-card">
          <h4 class="contacts-card__title small-text small-text--caps small-text--bold">Nossos contactos</h4>
          <div class="row">
            <div class="col-xs-4">
              <p class="small-text small-text--semibold">Geral</p>
            </div>
            <div class="col-xs-8">
              <p class="small-text">+351 000 000</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <p class="small-text small-text--semibold">A. Turístico</p>
            </div>
            <div class="col-xs-8">
              <p class="small-text">+351 000 000</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <p class="small-text small-text--semibold">Email</p>
            </div>
            <div class="col-xs-8">
              <p class="small-text">info@info.com</p>
            </div>
          </div>
        </div>
        <div class="contacts-card">
          <h4 class="contacts-card__title small-text small-text--caps small-text--bold">Onde estamos</h4>
          <p class="text">Av. Inferior à Ponte D. Luis I</p>
          <p class="text">nº 53  —  1º andar</p>
          <p class="text">4050-074 Porto — Portugal</p>
        </div>
      </div>

      <div class="col-sm-8">
        <h4 class="form__title subtitle">Formulário de contacto</h4>
        <div class="editable big-text">
          <p>Deixe-nos a sua mensagem, respondemos em breve. Todos os campos são de preenchimento obrigatório</p>
        </div>
        @include('front.forms.contacts-form')
      </div>
    </div>
  </div>
</section>

<section class="section">
   <div class="container">
      <div class="section__header grey">
         <h3 class="subtitle">Siga-nos no instagram <span>@visitportonorth</span></h3>
       </div>
    </div>
    <div class="container container--right">
      <div class="section__container">

         <div class="slideshow-wrapper">
            @include('front.components.instagram')
         </div>

      </div>
   </div>
</section>


<section class="section">
   <div class="container">
      @include('front.components.cta', [
      'image'=>'front/img/photos/photo2.png',
      'subtitle' => 'Newsletter',
      'title' => 'Vamos manter o contacto',
      'text' => 'Subscreva a nossa newsletter e fique a par de todas as novidades do Norte Portugal',
      'link' => '',
      ])
   </div>
</section>

@endsection


@push('scripts')
<script>
// instagram slideshow
var swiper = new Swiper('.slideshow-instagram', {
   speed: 1000,
  slidesPerView: 7,
  slidesPerGroup: 1,
  infinite: true,
  spaceBetween: 15,
  loop: true,
  cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
  breakpoints: {
     768: {
        slidesPerView: 3,
     },
      1100: {
         slidesPerView: 5,
      },
      1360: {
        slidesPerView: 6,
      },
   }
});
</script>
@endpush
