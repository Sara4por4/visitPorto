@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo8.png)"></div>
  <div class="container">
    <a class="top-banner__back link link--right" href="#"><span class="icon icon--caret-left"></span>voltar</a>
  </div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle text">Todo o ano / <span class="text--medium">1 dia</span></h4>
      <h1 class="top-banner__small-title section-title section-title--caps">Norte litoral: desportos náuticos, paisagem cuidada e sabor a mar</h1>
      <!-- icons -->
      <ul class="top-banner__icons-list">
        <li>
          @include('front.components.icon-card', [
            'icon' => 'front/img/icons/005-sauna.svg',
          ])
        </li>
        <li>
          @include('front.components.icon-card', [
            'icon' => 'front/img/icons/004-hiking.svg',
          ])
        </li>
      </ul>
      <!-- icons -->
    </div>
  </div>
</div>
<!-- top banner -->

<div class="anchor-menu">
  <div class="container container--shrink">

    <!-- anchor menu-->
    <ul class="anchor-menu__menu">
      <li class="active"> <a href="#">Resumo</a></li>
      <li> <a href="#">Planeamento</a></li>
      <li> <a href="#">Região(ões)</a></li>
      <li> <a href="#">Atividades relacionadas</a></li>
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

<section class="section section--sec">
   <div class="container container--shrink">

       <div class="details-list">
         <div class="details-list__el">
           <h4 class="details-list__title text text--bold text--caps">Resumo</h4>
            <!-- about text-->
            <div class="big-text editable">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <p class="author text text--semibold"><span>Autor </span>Nome do autor do roteiro</p>
          </div>
          <!-- end: about text-->
          <div class="details-list__el">
            <h4 class="details-list__title text text--caps text--bold">Planeamento</h4>
            <div class="planner-list">
              <!-- one day -->
              <div class="planner-list__el">
                <div class="planner-list__link" data-toggle="collapse" data-target="#day">
                  <h3 class="pull-left section-title"><span>1°</span> dia</h3>
                  <p class="link-sec pull-right">saber mais sobre o dia <span class="icon icon--caret-down"></span></p>
                </div>
                <div class="collapse show" id="day">
                  <div class="editable text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <h3 class="section-title">POIS/Promotores</h3>
                  <ul class="itinerary__list full">
                      <li>
                        @include('front.components.poi-small', [
                          'image'=>'front/img/photos/photo4.png',
                          'title' => 'Museu de anatomia da Faculdade de Medicina do Porto',
                          'local' => 'Região',
                          'time' => '1 -  2 dias',
                          'link' => 'poi-detail',
                        ])
                      </li>
                      <li>
                        @include('front.components.poi-small', [
                          'image'=>'front/img/photos/photo4.png',
                          'title' => 'Museu de anatomia da Faculdade de Medicina do Porto',
                          'local' => 'Região',
                          'time' => '1 -  2 dias',
                          'link' => 'poi-detail',
                        ])
                      </li>
                    </ul>
                </div>
              </div>
              <!-- end one day -->

              <!-- one day -->
              <div class="planner-list__el">
                <div class="planner-list__link" data-toggle="collapse" data-target="#secondday">
                  <h3 class="pull-left section-title"><span>2°</span> dia</h3>
                  <p class="link-sec pull-right">saber mais sobre o dia <span class="icon icon--caret-down"></span></p>
                </div>
                <div class="collapse" id="secondday">
                  <div class="editable text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <h3 class="section-title">POIS/Promotores</h3>
                  <ul class="itinerary__list full">
                      <li>
                        @include('front.components.poi-small', [
                          'image'=>'front/img/photos/photo4.png',
                          'title' => 'Museu de anatomia da Faculdade de Medicina do Porto',
                          'local' => 'Região',
                          'time' => '1 -  2 dias',
                          'link' => 'poi-detail',
                        ])
                      </li>
                      <li>
                        @include('front.components.poi-small', [
                          'image'=>'front/img/photos/photo4.png',
                          'title' => 'Museu de anatomia da Faculdade de Medicina do Porto',
                          'local' => 'Região',
                          'time' => '1 -  2 dias',
                          'link' => 'poi-detail',
                        ])
                      </li>
                    </ul>
                </div>
              </div>
              <!-- end one day -->
              <!-- one day -->
              <div class="planner-list__el">
                <div class="planner-list__link" data-toggle="collapse" data-target="#thirdday">
                  <h3 class="pull-left section-title"><span>3°</span> dia</h3>
                  <p class="link-sec pull-right">saber mais sobre o dia <span class="icon icon--caret-down"></span></p>
                </div>
                <div class="collapse" id="thirdday">
                  <div class="editable text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <h3 class="section-title">POIS/Promotores</h3>
                  <ul class="itinerary__list full">
                      <li>
                        @include('front.components.poi-small', [
                          'image'=>'front/img/photos/photo4.png',
                          'title' => 'Museu de anatomia da Faculdade de Medicina do Porto',
                          'local' => 'Região',
                          'time' => '1 -  2 dias',
                          'link' => 'poi-detail',
                        ])
                      </li>
                      <li>
                        @include('front.components.poi-small', [
                          'image'=>'front/img/photos/photo4.png',
                          'title' => 'Museu de anatomia da Faculdade de Medicina do Porto',
                          'local' => 'Região',
                          'time' => '1 -  2 dias',
                          'link' => 'poi-detail',
                        ])
                      </li>
                    </ul>
                </div>
              </div>
              <!-- end one day -->
            </div>
          </div>

          <!-- regiao-->
          <div class="details-list__el">
            <h4 class="details-list__title text text--caps">Região(s)</h4>
            <ul class="regions-list">
              <li class="regions-list__el">
                @include('front.components.region-teaser', [
                  'title' => 'Porto',
                  'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                ])
              </li>
              <li class="regions-list__el">
                @include('front.components.region-teaser', [
                  'title' => 'Douro',
                  'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                ])
              </li>
            </ul>
          </div>
          <!-- end:regiao-->
        </div>
     <!-- end:main content -->

   </div>
</section>

<div class="container">
  <hr class="divisor">
</div>

<section class="section section--sec">
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

$('.planner-list__link').click( function(){
  // pois slideshow
  var swiper = new Swiper('.pois-slideshow.slideshow-exploring', {
     speed: 1000,
    slidesPerView: 3,
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
          slidesPerView: 3,
          slidesPerGroup: 3,
        },
        768: {
           slidesPerView: 2,
           slidesPerGroup: 2,
        },
        510: {
          slidesPerView: 1,
         slidesPerGroup: 1,
        },
     }
  });

})


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
