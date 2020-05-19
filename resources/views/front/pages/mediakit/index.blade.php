@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo16.jpg)"></div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle subtitle">Media</h4>
      <h1 class="top-banner__big-title big-title">Media kit</h1>
    </div>
    <a href="#scrolldown" class="top-banner__scroll icon icon--arrow-down"></a>
  </div>
</div>
<!-- top banner -->
<section class="section">
  <div class="container container--shrink">
    <h4 class="form__title blue subtitle subtitle--bold">Está curioso sobre o Porto e o Norte de Portugal?</h4>
    <div class="big-text editable">
      <p>O presente guia fornece-lhe toda a informação necessária sobre o Porto e Norte de Portugal. Trata-se de uma oferta gratuita do Porto Convention & Visitors Bureau. Uma região com quatro locais considerados como Património Mundial pela UNESCO e muito mais para descobrir. No Porto e Norte de Portugal, história e tempos modernos cruzam-se, paisagens de cortar a respiração brilham e as experiências são inesquecíveis.</p>
    </div>

    <hr class="divisor">
  </div>
</section>

<section class="section section--sec">
  <div class="container container--shrink form">
      <h4 class="form__title subtitle">Formulário media kit</h4>
      <div class="editable big-text">
        <p>Preencha os seguintes campos para fazer o download do nosso guia. Todos os campos são de preenchimento obrigatório.</p>
      </div>

      @include('front.forms.kit-form')

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
