@extends ('front.layout.app')
@section('content')

<!-- top slide -->
<div class="slideshow-topo">
   <div class="slider-for">
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo11.jpg'
      ])
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo15.png'
      ])
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo8.png'
      ])
   </div>
   <div class="slider-nav">
      @include('front.components.top-slider-nav', [
         'subtitle' => 'NOTÍCIA / 15 de Março de 2020',
         'title' => 'Planeie a sua viagem, encontre novos lugares e atividades, divirta-se com a sua família.',
         'link' => '',
      ])
      @include('front.components.top-slider-nav', [
          'subtitle' => 'NOTÍCIA / 15 de Março de 2020',
         'title' => '2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
         'link' => '',
      ])
      @include('front.components.top-slider-nav', [
        'subtitle' => 'NOTÍCIA / 15 de Março de 2020',
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
       </div>
     </div>
   </div>
 </div>

 <section class="section section--sec">
   <div class="container">

     <div class="cards-list row">
       <div class="cards-list__el col-sm-4 col-md-3 col-xs-6">
         @include('front.components.teaser-card-communication', [
            'image'=>'front/img/photos/photo5.jpg',
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
            'area' => 'Tipologia',
            'date' => '15 a 20 Março 2020',
            'category' => '',
            'link' => 'news-detail',
            'class' => 'max-height',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3 col-xs-6">
         @include('front.components.teaser-card-communication', [
            'image'=>'front/img/photos/photo14.png',
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
            'area' => 'Tipologia',
            'date' => '15 a 20 Março 2020',
            'category' => '',
            'link' => 'news-detail',
            'class' => 'max-height',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3 col-xs-6">
         @include('front.components.teaser-card-communication', [
            'image'=>'front/img/photos/photo5.jpg',
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
            'area' => 'Tipologia',
            'date' => '15 a 20 Março 2020',
            'category' => '',
            'link' => 'news-detail',
            'class' => 'max-height',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3 col-xs-6">
         @include('front.components.teaser-card-communication', [
            'image'=>'front/img/photos/photo14.png',
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
            'area' => 'Tipologia',
            'date' => '15 a 20 Março 2020',
            'category' => '',
            'link' => 'news-detail',
            'class' => 'max-height',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3 col-xs-6">
         @include('front.components.teaser-card-communication', [
            'image'=>'front/img/photos/photo5.jpg',
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
            'area' => 'Tipologia',
            'date' => '15 a 20 Março 2020',
            'category' => '',
            'link' => 'news-detail',
            'class' => 'max-height',
         ])
       </div>
       <div class="cards-list__el col-sm-4 col-md-3 col-xs-6">
         @include('front.components.teaser-card-communication', [
            'image'=>'front/img/photos/photo14.png',
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
            'area' => 'Tipologia',
            'date' => '15 a 20 Março 2020',
            'category' => '',
            'link' => 'news-detail',
            'class' => 'max-height',
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
           dots: true,
           arrows: true,
           focusOnSelect: true,
           autoplay:true,
           cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
           appendDots: '.slideshow-topo__dots',
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
</script>
@endpush
