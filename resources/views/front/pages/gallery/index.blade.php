@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo8.png)"></div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle subtitle">Media</h4>
      <h1 class="top-banner__big-title big-title">Galeria</h1>
    </div>
    <a href="#scrolldown" class="top-banner__scroll icon icon--arrow-down"></a>
  </div>
</div>
<!-- top banner -->
<section class="section">
  <div class="container container--shrink">
    <div class="social-card-list row">
      <div class="social-card-list__el col-sm-6">
        @include('front.components.social-card', [
         'icon'=>'front/img/icons/vimeo-blue.svg',
          'title' => 'Vimeo',
          'text' => 'See and download our videos of Porto and Northern Portugal.',
          'hashtag' => 'visitporto&thenorth',
          'link' => '',
        ])
      </div>
      <div class="social-card-list__el col-sm-6">
        @include('front.components.social-card', [
         'icon'=>'front/img/icons/flickr-blue.svg',
          'title' => 'Flickr',
          'text' => 'See and download our videos of Porto and Northern Portugal.',
          'hashtag' => 'visitporto&thenorth',
          'link' => '',
        ])
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
