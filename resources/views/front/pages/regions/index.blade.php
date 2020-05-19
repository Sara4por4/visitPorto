@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo1.png)"></div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle subtitle">Porto e norte</h4>
      <h1 class="top-banner__big-title big-title">Nome da região</h1>
    </div>
    <a id="scrolldown" href="" class="top-banner__scroll icon icon--arrow-down"></a>
  </div>
</div>
<!-- top banner -->

<div class="anchor-menu">
  <div class="container container--shrink">

    <!-- anchor menu-->
    <ul class="anchor-menu__menu">
      <li class="active"> <a href="#area1">Sobre</a> </li>
      <li> <a href="#area2">Como chegar</a> </li>
      <li> <a href="#area3">Galeria</a> </li>
      <li> <a href="#area4">POIs</a> </li>
      <li> <a href="#area5">Atividades</a> </li>
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
      </ul>
    </div>
    <!-- anchor menu-->
  </div>
</div>

<section class="section section--sec">
   <div class="container container--shrink">

      <div class="section__container" id="area1">

        <!-- text-->
        <article class="article-base">
          <div class="big-text editable">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="collapse" id="viewdetails">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="link-sec" data-toggle="collapse" data-target="#viewdetails">Leia mais sobre isto<span class="icon icon--caret-down"></span></a>
          </div>
        </article>
        <!-- text-->
      </div>
      <div class="section__header"  id="area2">
         <h4 class="text text--caps text--bold">Como chegar</h4>
         <h3 class="section-title grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</h3>
      </div>
      <div class="section__container">
        <ul class="transports-list">
          <li>
            <h4 class="text text--bold text--caps">Avião</h4>
            <div class="big-text editable">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </li>
          <li>
            <h4 class="text text--bold text--caps">Comboio</h4>
            <div class="big-text editable">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
            </div>
          </li>
          <li>
            <h4 class="text text--bold text--caps">Carro</h4>
            <div class="big-text editable">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
            </div>
          </li>
        </ul>

      </div>
   </div>
</section>

<div class="container">
  <hr class="divisor">
</div>

<section class="section section--sec" id="area3">
   <div class="container">
     <div class="section__header">
        <h4 class="text text--caps text--bold">Galeria</h4>
        <h3 class="section-title grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
     </div>
   </div>
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

     <div class="slideshow-gallery__footer clearfix">
        <!-- begin Arrows -->
        <div class="slideshow-gallery__arrows swiper__arrows clearfix">
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
        <div class="slideshow-gallery__dots"></div>
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
         'subtitle' => 'Pois',
         'title' => 'Conheça todos os POIS relacionados'
      ])

      <div class="section__container">
         <!-- begin slideshow -->
         <div class="slideshow-exploring__wrapper">
            <div class="slideshow-exploring swiper-container">
               <div class="swiper-wrapper">
                 <!-- begin slide -->
                 <div class="swiper-slide">
                 @include('front.components.teaser-card', [
                 'class'=>'big',
                   'icon'=>'front/img/icons/pin.svg',
                   'image'=>'front/img/photos/photo4.png',
                   'title' => 'Porto',
                   'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                   'time' => '1 -  2 dias',
                   'link' => 'poi',
                 ])
               </div>
               <!-- end slide -->
               </div>
            </div>

            <div class="slideshow-exploring__footer clearfix">
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

<div class="container">
  <hr class="divisor">
</div>
<section class="section section--sec" id="area5">
   <div class="container">
      @include('front.components.section-header', [
        'class' => '',
         'subtitle' => 'Atividades',
         'title' => 'Explore as atividades nesta região'
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
                        'link' => 'experiences',
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
                    'link' => 'experiences',
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
                        'link' => 'experiences',
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
                    'link' => 'experiences',
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

<div class="container">
  <hr class="divisor">
</div>

<section class="section section--sec">
   <div class="container">
      @include('front.components.section-header', [
         'class' => 'section-title--caps',
         'subtitle' => 'Porto e Norte',
         'title' => 'Explore as nossas regiões'
      ])

      <div class="section__container">

         <!-- map -->
         <bluemap></bluemap>
         <!-- map -->

      </div>
   </div>
</section>
<!-- map -->

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

   // topics slideshow
   var swiper = new Swiper('.slideshow-searching', {
      speed: 1000,
     slidesPerView: 4,
     slidesPerGroup: 4,
     infinite: true,
     spaceBetween: 15,
     loop: false,
     cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
     pagination: {
      el: '.swiper-pagination',
      clickable: true,
     },
     navigation: {
      nextEl: '.slideshow-searching__arrows .swiper-button-next',
      prevEl: '.slideshow-searching__arrows .swiper-button-prev',
     },
     breakpoints: {
         // when window width is <= 320px
         2000: {
           slidesPerView: 5,
          slidesPerGroup: 5,
         },
         1500: {
            slidesPerView: 4,
            slidesPerGroup: 4,
         },
         1100: {
           slidesPerView: 3,
           slidesPerGroup: 3,
         },
         510: {
           slidesPerView: 1,
           slidesPerGroup: 1,
         },
      }
   });


   // topics slideshow
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
