@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo18.png)"></div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle subtitle">Informações</h4>
      <h1 class="top-banner__big-title big-title">Transportes</h1>
    </div>
    <a href="#scrolldown" class="top-banner__scroll icon icon--arrow-down"></a>
  </div>
</div>
<!-- top banner -->

<section class="section">
 <div class="atp-section atp-section--intro container container--shrink">
   <div class="atp-section__text">
      <h4 class="atp-section__title subtitle">O Porto estabelece ligações aéreas, marítimas e terrestres</h4>
      <div class="big-text editable">
        <p>A aposta na qualidade das mesmas contribui para que a cidade tenha uma excelente relação com o exterior e com os seus visitantes.</p>
      </div>
    </div>
 </div>
</section>

<div class="about-list">
  <div class="about-list__el">
    @include('front.components.about-transports', [
    'image'=>'front/img/photos/photo17.png',
    'title' => 'CP Comboios de Portugal',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
    'contact' => '000 000 000',
    'link' => '',
    ])
  </div>
  <div class="about-list__el">
    @include('front.components.about-transports', [
    'image'=>'front/img/photos/photo3.png',
    'title' => 'Rede Expresso',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
    'contact' => '000 000 000',
    'link' => '',
    ])
  </div>
  <div class="about-list__el">
    @include('front.components.about-transports', [
    'image'=>'front/img/photos/photo17.png',
    'title' => 'Metro do Porto',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
    'contact' => '000 000 000',
    'link' => '',
    ])
  </div>
  <div class="about-list__el">
    @include('front.components.about-transports', [
    'image'=>'front/img/photos/photo3.png',
    'title' => 'Brisa',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
    'contact' => '000 000 000',
    'link' => '',
    ])
  </div>
  <div class="about-list__el">
    @include('front.components.about-transports', [
    'image'=>'front/img/photos/photo3.png',
    'title' => 'Ascendi',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
    'contact' => '000 000 000',
    'link' => '',
    ])
  </div>
</div>




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
