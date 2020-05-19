@extends ('front.layout.app')
@section('content')


<!-- top slide -->
<div class="slideshow-topo slideshow-topo--detail">
   <div class="slider-for">
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo15.png'
      ])
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo11.jpg'
      ])
      @include('front.components.top-slider-for', [
         'image' => 'front/img/photos/photo8.png'
      ])
   </div>
   <div class="top-banner top-banner--absolute">
      <div class="container">
        <a class="top-banner__back link link--right" href="events"><span class="icon icon--caret-left"></span>voltar</a>
         <div class="top-banner__caption-wrap caption">
             <div class="top-banner__caption">
                <h4 class="top-banner__subtitle">NOTÍCIA / 12 Abril de 2019</h4>
                <h2 class="top-banner__title section-title">Porto foi eleita a cidade da Europa mais interessante para visitar em 2019</h2>
             </div>
             <a href="#scrolldown" class="top-banner__scroll icon icon--arrow-down"></a>
         </div>
      </div>
   </div>
   <div class="slideshow-topo__nav-wrapper">
     <div class="line"><span><span></div>
     <div class="slideshow-topo__arrows"></div>
   </div>
</div>
<!-- top slide -->

<div class="anchor-menu">
  <div class="container container--shrink">
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
    </div>
  </div>
</div>

<section class="section section--sec">
   <div class="container container--shrink">

     <article class="article-base">
       <div class="big-text editable">
         <h4>Tradução de 1914 por H. Rackham</h4>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         <img src="front/img/photos/photo11.jpg" alt="">
         <h4>Tradução de 1914 por H. Rackham</h4>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         <img src="front/img/photos/photo10.jpg" alt="">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </div>
     </article>

   </div>
 </section>

<section class="section">
  <div class="container">
    @include('front.components.section-header', [
      'class' => '',
       'subtitle' => 'Notícias',
       'title' => 'Outros artigos que lhe podem interessar'
    ])
    <div class="section__container">
      <!-- apenas 4 itens  -->
      <div class="cards-list row">
        <div class="cards-list__el col-sm-4 col-md-3">
          @include('front.components.teaser-card-communication', [
             'image'=>'front/img/photos/photo4.png',
             'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
             'area' => 'Tipologia',
             'date' => '15 a 20 Março 2020',
             'category' => '',
             'link' => 'news-detail',
             'class' => 'max-height',
          ])
        </div>
        <div class="cards-list__el col-sm-4 col-md-3">
          @include('front.components.teaser-card-communication', [
             'image'=>'front/img/photos/photo4.png',
             'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
             'area' => 'Tipologia',
             'date' => '15 a 20 Março 2020',
             'category' => '',
             'link' => 'news-detail',
             'class' => 'max-height',
          ])
        </div>
        <div class="cards-list__el col-sm-4 col-md-3">
          @include('front.components.teaser-card-communication', [
             'image'=>'front/img/photos/photo4.png',
             'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
             'area' => 'Tipologia',
             'date' => '15 a 20 Março 2020',
             'category' => '',
             'link' => 'news-detail',
             'class' => 'max-height',
          ])
        </div>
        <div class="cards-list__el col-sm-4 col-md-3">
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


    $('.slider-for').on(
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
           arrows: true,
           dots: true,
           fade: true,
           autoplay:true,
           cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
           appendDots: '.slideshow-topo__dots',
           appendArrows: '.slideshow-topo__arrows',
           prevArrow: '<button role="button" class="icon icon--arrow-left"></button>',
           nextArrow: '<button role="button" class="icon icon--arrow-right"></button>',
        }
    );
</script>
@endpush
