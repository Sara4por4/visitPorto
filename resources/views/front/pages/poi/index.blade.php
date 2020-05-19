@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo11.jpg)"></div>
  <div class="container">
    <a class="top-banner__back link link--right" href="searchfor"><span class="icon icon--caret-left"></span>voltar</a>
  </div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle text">Região</h4>
      <h1 class="top-banner__small-title section-title section-title--caps">Centro Ciência Viva, Museu de História Natural e da Ciência da U. do Porto</h1>
    </div>
    <a href="#scrolldown" class="top-banner__scroll icon icon--arrow-down"></a>
  </div>
</div>
<!-- top banner -->

<div class="anchor-menu">
  <div class="container container--shrink">

    <!-- anchor menu-->
    <ul class="anchor-menu__menu">
      <li class="active"> <a href="#area1">Resumo</a></li>
      <li> <a href="#area2">Horários</a></li>
      <li> <a href="#area3">Região</a></li>
      <li> <a href="#area4">Experiências e Roteiros</a></li>
    </ul>
    <div class="anchor-menu__share dropdown-group">
      <button type="button" class="link-sec dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Partilhar<span class="icon icon--share"></span>
      </button>
      <ul class="dropdown-group__menu dropdown-menu">
        <li>
          <a class="dropdown-item" href="#">Facebook</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Facebook</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Facebook</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Facebook</a>
        </li>
      </ul>
      <button type="button" class="btn btn--blue">
        Adicionar<span class="icon icon--compass"></span>
      </button>
    </div>
    <!-- anchor menu-->
  </div>
</div>

<section class="section section--sec">
   <div class="container container--right">
     <div class="slideshow-gallery swiper-container">
       <div class="swiper-wrapper">

         <div class="swiper-slide">
           <div class="gallery-card" style="background-image:url(front/img/photos/photo10.jpg)"></div>
         </div>
         <div class="swiper-slide">
           <div class="gallery-card gallery-card--video">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/yXrlhebkpIQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
         </div>

       </div>
     </div>
   </div>
</section>

<div class="container container--shrink">
  <hr class="divisor" style="margin-top:60px">
</div>

<section class="section section--sec" id="area1">
   <div class="container">
     <div class="row detail-page">
       <!-- main content -->
       <div class="col-md-9 col-sm-6 detail-page__col">
         <div class="section__container">
           <div class="section__header">
              <h4 class="text text--caps text--bold">Resumo</h4>
              <h3 class="section-title grey">Um Museu e um Centro de Ciência Viva — Evolução, diversidade e a convergência entre o mundo natural e cultural.</h3>
           </div>
           <!-- about text-->
          <article class="article-base">
            <div class="big-text editable">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p class="collapse" id="viewdetails">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="link-sec" data-toggle="collapse" data-target="#viewdetails">Leia mais sobre isto<span class="icon icon--caret-down"></span></a>
            </div>
          </article>
          <!-- end: about text-->
          <div class="details-list">
            <div class="details-list__el commodity">
              <!-- comodidades-->
              <h4 class="commodity__title text text--semibold">Comodidades</h4>
              <ul class="commodity__list">
                <li>
                  <img src="front/img/icons/multibanco.svg" alt="">
                  <p class="small-text small-text--caps small-text--bold">Disponivel pagamento multibanco</p>
                </li>
                <li>
                  <span class="icon icon--wheelchair"></span>
                  <p class="small-text small-text--caps small-text--bold">Acesso adaptado</p>
                </li>
                <li>
                  <span class="icon icon--globo"></span>
                  <p class="small-text small-text--caps small-text--bold">Idiomas:
                    <span>Português, Inglês</span></p>
                </li>
              </ul>
              <!-- end:comodidades-->
            </div>
            <div class="details-list__el" id="area2">
              <!-- horarios-->
              <h4 class="details-list__title text text--bold text--caps">Horários</h4>
              <div class="row">
                <div class="col-sm-6">
                  @include('front.components.schedule', [
                    'season' => 'Inverno',
                    'months' => 'Outubro a Março',
                    'week' => '10h — 13h / 14h — 18h',
                     'sunday' => '10h — 13h',
                     'holiday' => 'Fechado',
                  ])
                </div>
                <div class="col-sm-6">
                  @include('front.components.schedule', [
                    'season' => 'Verão',
                    'months' => 'Abril a Setembro',
                    'week' => '9h — 19h',
                     'sunday' => '10h — 13h',
                     'holiday' => 'Fechado',
                  ])
                </div>
              </div>
              <!-- end:horarios-->
            </div>
            <!-- regiao-->
            <div class="details-list__el" id="area3">
              <h4 class="details-list__title text text--caps text--bold">Região(s)</h4>
              <ul class="regions-list">
                <li class="regions-list__el">
                  @include('front.components.region-teaser', [
                    'title' => 'Porto',
                    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                  ])
                </li>
              </ul>
            </div>
            <!-- end:regiao-->
          </div>
        </div>
       </div>
       <!-- end:main content -->

       <!-- side content -->
       <div class="col-md-3 col-sm-6 detail-page__col">
         <div class="poi-contacts">
           <!-- logo -->
           @include('front.components.logo-card', [
             'img' => 'front/img/logos/logo1.png',
           ])
           <!-- logo -->
           <div class="poi-contacts__content">
             @include('front.components.poi-address', [
               'address' => 'Praça Gomes Teixeira (entrada pelo Jardim da Cordoaria) 4099-002 Porto, Portugal',
               'coordenadas' => '41°14’61.4”N | 8°61’58.4”W',
               'map' => '',
             ])
           </div>
           <div class="poi-contacts__content">
             @include('front.components.poi-contacts', [
               'phone' => '000 000 000',
               'email' => 'info@mail.com',
               'website' => 'www.info.com',
             ])
           </div>
           <div class="poi-contacts__content">
             <h4 class="poi-contacts__title small-text small-text--semibold">Social Media</h4>
             <ul class="poi-contacts__social social-list">
               <li>
                 <a href="#" data-target="_blank">
                  <img src="front/img/icons/facebook.svg" alt="">
                </a>
               </li>
               <li>
                 <a href="#" data-target="_blank">
                   <img src="front/img/icons/instagram.svg" alt="">
                 </a>
               </li>
             </ul>
           </div>
         </div>
       </div>
       <!-- end: side content -->

     </div>


   </div>
</section>

<div class="container">
  <hr class="divisor">
</div>

<section class="section section--sec" id="area4">
   <div class="container">
      @include('front.components.section-header', [
        'class' => '',
         'subtitle' => 'Atividades',
         'title' => 'Explore as atividades relacionadas'
      ])

      <div class="section__container">

         <!-- begin slideshow -->
         <div class="slideshow-exploring__wrapper">
            <div class="slideshow-exploring swiper-container">

              <!--  ATENÇÃO: CARDS DIFERENTES-->

               <div class="swiper-wrapper">
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.teaser-card-communication', [
                        'image'=>'front/img/photos/photo5.jpg',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
                        'area' => 'tipologia',
                        'date' => '15 a 20 Março 2020',
                        'category' => 'Grande Porto',
                        'link' => '',
                        'class' => '',
                     ])
                  </div>
                  <!-- end slide -->

                  <!-- begin slide -->
                  <div class="swiper-slide">
                  @include('front.components.teaser-card-activities', [
                   'class'=>'big',
                   'icon'=>'front/img/icons/calendar.svg',
                    'subtitle'=>'Março a Abril',
                    'image'=>'front/img/photos/photo4.png',
                    'title' => '3 dias',
                    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                    'local' => 'Grande Porto',
                    'author' => 'Nome do Autor',
                    'link' => '',
                  ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.teaser-card-communication', [
                        'image'=>'front/img/photos/photo5.jpg',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
                        'area' => 'tipologia',
                        'date' => '15 a 20 Março 2020',
                        'category' => 'Grande Porto',
                        'link' => '',
                        'class' => '',
                     ])
                  </div>
                  <!-- end slide -->

                  <!-- begin slide -->
                  <div class="swiper-slide">
                  @include('front.components.teaser-card-activities', [
                   'class'=>'big',
                   'icon'=>'front/img/icons/calendar.svg',
                    'subtitle'=>'Março a Abril',
                    'image'=>'front/img/photos/photo4.png',
                    'title' => '3 dias',
                    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                    'local' => 'Grande Porto',
                    'author' => 'Nome do Autor',
                    'link' => '',
                  ])
                  </div>
                  <!-- end slide -->

               </div>

            </div>

            <div class="slideshow-exploring__footer clearfix">

            <!-- Begin Pagination -->
               <!-- <div class="slideshow-exploring__pagination"></div> -->
            <!-- End Pagination -->

               <!-- begin Arrows -->
               <div class="slideshow-exploring__arrows swiper__arrows clearfix">
                  <div class="swiper-button swiper-button-prev">
                     <div class="swiper-button__wrap">
                        <div class="icon icon--arrow-left first"></div>
                        <div class="icon icon--arrow-left last"></div>
                     </div>
                  </div>
                  <div class="swiper-button swiper-button-next">
                     <div class="swiper-button__wrap">
                        <div class="icon icon--arrow-right first"></div>
                        <div class="icon icon--arrow-right last"></div>
                     </div>
                  </div>
               </div>
               <!-- end Arrows -->
               <div class="slideshow-exploring__dots"></div>
            </div>
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

///////////////// fixed menu on scroll for desktop
var bannerHeight = $('.top-banner').outerHeight();
var menuHeight = $('.anchor-menu').outerHeight();
var totalHeight = menuHeight + bannerHeight;

$(window).scroll(function(){
   if ($(this).scrollTop() > totalHeight) {
      $('.anchor-menu').addClass("fixed-top");
    }else{
      $('.anchor-menu').removeClass("fixed-top");
    }
});


   // explore slideshow
   var swiper = new Swiper('.slideshow-exploring', {
      speed: 1000,
     slidesPerView: 4,
     slidesPerGroup: 1,
     spaceBetween: 7,
     loop: false,
     appendDots: '.slideshow-exploring__dots',
     navigation: {
      nextEl: '.slideshow-exploring__arrows .swiper-button-next',
      prevEl: '.slideshow-exploring__arrows .swiper-button-prev',
     },
     pagination: {
      el: '.slideshow-exploring__dots',
      type: 'bullets',
    },
     breakpoints: {
         // when window width is <= 320px
         2000: {
           slidesPerView: 4,
           slidesPerGroup: 4,
         },
         768: {
            slidesPerView: 3,
            slidesPerGroup: 3,
         },
         510: {
           slidesPerView: 1,
          slidesPerGroup: 1,
         },
      }
   });

   $('.slideshow-exploring__arrows .swiper-button').click( function(){
      $('.slideshow-exploring__pagination .swiper-pagination-current').addClass('effect');
      setTimeout(function () {
           $('.slideshow-exploring__pagination .swiper-pagination-current').removeClass('effect');
      }, 500);
   });


   // gallery slideshow
   var swiper = new Swiper('.slideshow-gallery', {
      speed: 1000,
     slidesPerView: 'auto',
     slidesPerGroup: 1,
     infinite: true,
     spaceBetween: 15,
     loop: false,
     cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
     appendDots: '.slideshow-gallery__dots',
     navigation: {
      nextEl: '.slideshow-gallery__arrows .swiper-button-next',
      prevEl: '.slideshow-gallery__arrows .swiper-button-prev',
     },
     pagination: {
      el: '.slideshow-gallery__dots',
      type: 'bullets',
    },
   });

</script>

@endpush
