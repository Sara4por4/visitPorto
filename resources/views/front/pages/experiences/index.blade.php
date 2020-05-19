@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo2.png)"></div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle subtitle">Experiências</h4>
      <h1 class="top-banner__big-title big-title">Religioso</h1>
    </div>
    <a href="#scrolldown" class="top-banner__scroll icon icon--arrow-down"></a>
  </div>
</div>
<!-- top banner -->

 <div class="container">

   <div class="filters-header">
     <div class="filters-header__top row">
       <div class="col-sm-8">
         <h4 class="subtitle subtitle--regular"><span>50</span> Resultados</h4>
       </div>
       <div class="col-sm-4">
        <filters></filters>
       </div>
     </div>
     <div class="filters-header__bottom row">
       <div class="col-sm-8">
         <h4 class="small-text small-text--caps">Filtros:</h4>
         <ul class="filters-header__list">
           <li>Selecionado <button type="button" name="button" class="icon icon--close"></button> </li>
         </ul>
       </div>
       <div class="col-sm-4">
         <!-- switch button -->
         <div class="switch-group pull-right">
           <h4 class="small-text small-text--medium">Mostrar Mapa</h4>
           <label class="switch">
              <input class="switchMap" type="checkbox">
              <span class="slider round"></span>
           </label>
         </div>
         <!-- switch button -->
         <!-- map -->
           <div class="toggle-map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24022.00266369018!2d-8.702609661051756!3d41.18361242411681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24689da50b488b%3A0x400ebbde49038d0!2sMatosinhos!5e0!3m2!1spt-PT!2spt!4v1587641283555!5m2!1spt-PT!2spt" width="400" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>
         <!-- map -->
       </div>
     </div>
   </div>
 </div>

 <section class="section section--sec">
   <div class="container">

     <div class="cards-list row">
       <div class="cards-list__el col-sm-4 col-md-3">
         @include('front.components.teaser-card-activities', [
          'class'=>'big',
          'icon'=>'front/img/icons/calendar.svg',
           'subtitle'=>'Março a Abril',
           'image'=>'front/img/photos/photo4.png',
           'title' => '3 dias',
           'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
           'local' => 'Grande Porto, Minho, Douro, Trás-os-Montes',
           'link' => 'experience-detail',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3">
         @include('front.components.teaser-card-activities', [
          'class'=>'big',
          'icon'=>'front/img/icons/calendar.svg',
           'subtitle'=>'Março a Abril',
           'image'=>'front/img/photos/photo4.png',
           'title' => '3 dias',
           'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
           'local' => 'Grande Porto, Minho, Douro',
           'link' => 'experience-detail',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3">
         @include('front.components.teaser-card-activities', [
          'class'=>'big',
          'icon'=>'front/img/icons/calendar.svg',
           'subtitle'=>'Março a Abril',
           'image'=>'front/img/photos/photo4.png',
           'title' => '3 dias',
           'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
           'local' => 'Grande Porto, Minho, Douro',
           'link' => 'experience-detail',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3">
         @include('front.components.teaser-card-activities', [
          'class'=>'big',
          'icon'=>'front/img/icons/calendar.svg',
           'subtitle'=>'Março a Abril',
           'image'=>'front/img/photos/photo4.png',
           'title' => '3 dias',
           'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
           'local' => 'Grande Porto, Minho, Douro',
           'link' => 'experience-detail',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3">
         @include('front.components.teaser-card-activities', [
          'class'=>'big',
          'icon'=>'front/img/icons/calendar.svg',
           'subtitle'=>'Março a Abril',
           'image'=>'front/img/photos/photo4.png',
           'title' => '3 dias',
           'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
           'local' => 'Grande Porto, Minho, Douro',
           'link' => 'experience-detail',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3">
         @include('front.components.teaser-card-activities', [
          'class'=>'big',
          'icon'=>'front/img/icons/calendar.svg',
           'subtitle'=>'Março a Abril',
           'image'=>'front/img/photos/photo4.png',
           'title' => '3 dias',
           'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
           'local' => 'Grande Porto, Minho, Douro',
           'link' => 'experience-detail',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3">
         @include('front.components.teaser-card-activities', [
          'class'=>'big',
          'icon'=>'front/img/icons/calendar.svg',
           'subtitle'=>'Março a Abril',
           'image'=>'front/img/photos/photo4.png',
           'title' => '3 dias',
           'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
           'local' => 'Grande Porto, Minho, Douro',
           'link' => 'experience-detail',
         ])
       </div>
     </div>

     <!-- pag -->
     <div class="pagination">
       <button class="pagination__btn icon icon--arrow-left" type="button" name="button"></button>
       <div class="pagination__nrs">
         <p class="text"><span class="active">1</span> — <span class="total">10</span></p>
       </div>
       <button class="pagination__btn icon icon--arrow-right" type="button" name="button"></button>
     </div>
     <!-- pag -->


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
