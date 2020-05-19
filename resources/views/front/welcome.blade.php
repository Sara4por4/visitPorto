@extends ('front.layout.app')

@section('content')

<!-- top slide -->
<div class="slideshow-topo">
   <div class="slider-for">
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo1.png'
      ])
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo2.png'
      ])
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo8.png'
      ])
   </div>
   <div class="slider-nav">
      @include('front.components.top-slider-nav', [
         'subtitle' => 'Trás-os-Montes',
         'title' => 'Aliando a tradição à natureza, a região oferece diferentes tipos de atividades para pais e filhos. Conheça o nosso roteiro e descubra o que fazer!',
         'link' => '',
      ])
      @include('front.components.top-slider-nav', [
         'subtitle' => 'Segundo subtítulo',
         'title' => '2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
         'link' => '',
      ])
      @include('front.components.top-slider-nav', [
         'subtitle' => 'Terceiro subtítulo',
         'title' => '3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
         'link' => '',
      ])
   </div>
   <div class="slideshow-topo__nav-wrapper">
     <div class="line"><span><span></div>
     <div class="slideshow-topo__arrows"></div>
   </div>

</div>
<!-- top slide -->

<!-- search bar -->
<search></search>
<!-- search bar -->

<!-- fixed btns -->
<fixedbtns></fixedbtns>
<!-- fixed btns -->

<section class="section">
   <div class="container container--right">
      @include('front.components.section-header', [
      'class' => 'section-title--caps',
         'subtitle' => 'Experiências',
         'title' => 'Experiencia o norte de portugal'
      ])
      <div class="section__container">
         <!-- begin slideshow -->
         <div class="slideshow-searching__wrapper">
            <div class="slideshow-searching swiper-container">
               <div class="swiper-wrapper">
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.img-card', [
                     'image'=>'front/img/photos/photo9.png',
                     'icon' => 'front/img/icons/008-wine.svg',
                     'title' => 'Enoturismo',
                     'link' => 'experiences',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.img-card', [
                     'image'=>'front/img/photos/photo10.jpg',
                     'icon' => 'front/img/icons/032-sardines.svg',
                     'title' => 'gastronomia',
                     'link' => 'experiences',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.img-card', [
                     'image'=>'front/img/photos/photo11.jpg',
                     'icon' => 'front/img/icons/017-prayer.svg',
                     'title' => 'religioso',
                     'link' => 'experiences',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.img-card', [
                     'image'=>'front/img/photos/photo12.jpg',
                     'icon' => 'front/img/icons/theater.svg',
                     'title' => 'cultural',
                     'link' => 'experiences',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.img-card', [
                     'image'=>'front/img/photos/photo7.png',
                     'icon' => 'front/img/icons/004-hiking.svg',
                     'title' => 'aventura',
                     'link' => 'experiences',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.img-card', [
                     'image'=>'front/img/photos/photo9.png',
                     'icon' => 'front/img/icons/005-sauna.svg',
                     'title' => 'bem-estar',
                     'link' => 'experiences',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.img-card', [
                     'image'=>'front/img/photos/photo10.jpg',
                     'icon' => 'front/img/icons/arqui.svg',
                     'title' => 'arquitetura',
                     'link' => 'experiences',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.img-card', [
                     'image'=>'front/img/photos/photo11.jpg',
                     'icon' => 'front/img/icons/032-mountain.svg',
                     'title' => 'natureza',
                     'link' => 'experiences',
                     ])
                  </div>
                  <!-- end slide -->

               </div>
            </div>

         </div>
         <!-- end slideshow -->

      </div>
   </div>
</section>

<section class="section box">
   <div class="container">
      @include('front.components.section-header', [
      'class' => 'section-title--caps',
         'subtitle' => 'Eventos',
         'title' => 'o que está a acontecer'
      ])

      <div class="section__container">
         <!-- tabs -->
         <ul class="tabs-list">
            <li class="active"><a href="">Todos</a></li>
            <li><a href="">Concertos</a></li>
            <li><a href="">Festivais</a></li>
            <li><a href="">Exposições</a></li>
         </ul>
         <!-- tabs -->

         <!-- begin slideshow -->
         <div class="slideshow-exploring__wrapper">
            <div class="slideshow-exploring swiper-container">
               <div class="swiper-wrapper">
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.teaser-card-communication', [
                        'image'=>'front/img/photos/photo5.jpg',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
                        'area' => 'tipologia',
                        'date' => '15 a 20 Março 2020',
                        'category' => 'Grande Porto',
                        'link' => 'events-detail',
                        'class' => '',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.teaser-card-communication', [
                        'image'=>'front/img/photos/photo4.png',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
                        'area' => 'tipologia',
                        'date' => '30 Março 2019',
                        'category' => 'Grande Porto',
                        'link' => 'events-detail',
                        'class' => '',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.teaser-card-communication', [
                        'image'=>'front/img/photos/photo8.png',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
                        'area' => 'tipologia',
                        'date' => '30 Abril 2019',
                        'category' => 'Grande Porto',
                        'link' => 'events-detail',
                        'class' => '',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.teaser-card-communication', [
                        'image'=>'front/img/photos/photo1.png',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
                        'area' => 'tipologia',
                        'date' => '30 Março 2019',
                        'category' => 'Grande Porto',
                        'link' => 'events-detail',
                        'class' => '',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.teaser-card-communication', [
                        'image'=>'front/img/photos/photo4.png',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
                        'area' => 'tipologia',
                        'date' => '30 Março 2019',
                        'category' => 'Grande Porto',
                        'link' => 'events-detail',
                        'class' => '',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.teaser-card-communication', [
                        'image'=>'front/img/photos/photo1.png',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
                        'area' => 'tipologia',
                        'date' => '30 Março 2019',
                        'category' => 'Grande Porto',
                        'link' => 'events-detail',
                        'class' => '',
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

               <a href="events" class="slideshow-exploring__link link">ver mais eventos <span class="icon icon--arrow-right"></span></a>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section">
   <div class="container">
      <div class="cta-wrapper clearfix">

         <div class="cta-wrapper__el">
            <!-- testemonials slideshow -->
            <div class="slideshow-testemonials swiper-container">
               <div class="swiper-wrapper">
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.testemonials-card', [
                     'image'=>'front/img/photos/photo2.png',
                     'title' => 'Ana Abel',
                     'address' => 'Barcelona, Espanha',
                     'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin slide -->
                  <div class="swiper-slide">
                     @include('front.components.testemonials-card', [
                     'image'=>'front/img/photos/photo1.png',
                     'title' => 'João Mata',
                     'address' => 'Madrid, Espanha',
                     'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                     ])
                  </div>
                  <!-- end slide -->
                  <!-- begin Arrows -->
                  <div class="slideshow-testemonials__arrows swiper__arrows clearfix">
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
                  <button data-toggle="modal" data-target="#testemonial" type="button" name="button" class="slideshow-testemonials__link btn btn--blue">Testemunhar<span class="icon icon--pencil"></span></button>

               </div>
            </div>
            <!-- testemonials slideshow -->

         </div>
         <div class="cta-wrapper__el">
            @include('front.components.cta-card', [
            'image'=>'front/img/photos/photo2.png',
            'subtitle' => 'Meu guia',
            'title' => 'Planeie a sua viagem, encontre novos lugares, divirta-se e crie memórias!',
            'link' => '',
            ])
         </div>
      </div>
   </div>
</section>

<section class="section box">
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
      ])
   </div>
</section>

@include('front.components.modal-testemonial')

@endsection

@push('scripts')
<script>

   // explore slideshow
   var swiper = new Swiper('.slideshow-testemonials', {
      speed: 1000,
     slidesPerView: 1,
     slidesPerGroup: 1,
     loop: true,
     loopFillGroupWithBlank: true,
     effect: 'fade',
     navigation: {
      nextEl: '.slideshow-testemonials__arrows .swiper-button-next',
      prevEl: '.slideshow-testemonials__arrows .swiper-button-prev',
     },
   });

   // explore slideshow
   var swiper = new Swiper('.slideshow-exploring', {
      speed: 1000,
     slidesPerView: 4,
     slidesPerGroup: 4,
     spaceBetween: 13,
     loop: true,
     loopFillGroupWithBlank: true,
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
     slidesPerView: 'auto',
     slidesPerGroup: 5,
     infinite: true,
     spaceBetween: 15,
     loop: true,
     cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
     pagination: {
      el: '.swiper-pagination',
      clickable: true,
     },
     breakpoints: {
         // when window width is <= 320px
         // 2000: {
         //   slidesPerView: 6,
         //  slidesPerGroup: 6,
         // },
         // 1300: {
         //    slidesPerView: 5,
         //    slidesPerGroup: 5,
         // },
         // 1100: {
         //   slidesPerView: 4,
         //   slidesPerGroup: 4,
         // },
         // 510: {
         //   slidesPerView: 2,
         //   slidesPerGroup: 2,
         // },
      }
   });

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
         1024: {
            slidesPerView: 5,
         },
         1367: {
           slidesPerView: 6,
         },
      }
   });


      $('.slider-nav').on(
          'init',
          function (event, slick) {
              $(slick.$slides[slick.currentSlide]).addClass('active');
          }
      ).on(
          'afterChange',
          function (event, slick, currentSlide, nextSlide) {
              $(slick.$slides[currentSlide]).addClass('active');
              $('.line span').addClass('animation');
          }
      ).on(
          'beforeChange',
          function (event, slick, currentSlide, nextSlide) {
              $(slick.$slides[currentSlide]).removeClass('active');
              $('.line span').removeClass('animation');
          }
      ).slick(
          {
             infinite:true,
             slidesToShow: 1,
             slidesToScroll: 1,
             asNavFor: '.slider-for',
             dots: false,
             arrows: true,
             focusOnSelect: true,
             autoplay:true,
             speed: 600,
             cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
             appendArrows: '.slideshow-topo__arrows',
             prevArrow: '<button role="button" class="icon icon--arrow-left"></button>',
             nextArrow: '<button role="button" class="icon icon--arrow-right"></button>',
             responsive: [
             {
                breakpoint: 576,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: true
                }
            },
            ]
          }
      );


      $('.slider-for').on(
          'init',
          function (event, slick) {
              $(slick.$slides[slick.currentSlide]).addClass('active');
          }
      ).on(
          'afterChange',
          function (event, slick, currentSlide, nextSlide) {
              $(slick.$slides[currentSlide]).addClass('active');
          }
      ).on(
          'beforeChange',
          function (event, slick, currentSlide, nextSlide) {
              $(slick.$slides[currentSlide]).removeClass('active');
          }
      ).slick(
          {
             infinite:true,
             slidesToShow: 1,
             slidesToScroll: 1,
             arrows: false,
             fade: true,
             autoplay:true,
             asNavFor: '.slider-nav',
             cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
          }
      );


      // tabs slide moblie
      $('.tabs-list').slick(
          {
             infinite:true,
             slidesToShow: 1,
             slidesToScroll: 2,
             centerPadding: '120px 0 0',
             centerMode: true,
             dots: false,
             arrows: false,
             focusOnSelect: true,
             responsive: [
             {
                breakpoint: 4000,
                settings:"unslick",
            },
             {
                breakpoint: 576,
                settings:{
                   slidesToShow: 1,
                 slidesToScroll: 1,
                }
            },
            ]
          }
      );

</script>

@endpush
