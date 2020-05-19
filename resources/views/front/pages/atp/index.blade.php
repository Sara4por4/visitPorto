@extends ('front.layout.app')

@section('content')

<!-- top banner -->
<div class="top-banner top-banner--sec">
  <div class="top-banner__bg" style="background-image:url(front/img/photos/photo13.png)"></div>
  <div class="top-banner__caption-wrap">
    <div class="top-banner__caption">
      <h4 class="top-banner__subtitle subtitle">ATP</h4>
      <h1 class="top-banner__big-title big-title">Quem somos</h1>
    </div>
    <a href="#scrolldown" class="top-banner__scroll icon icon--arrow-down"></a>
  </div>
</div>
<!-- top banner -->

 <div class="container container--right">
   <div class="about about--left clearfix">
     <div class="about__col text">
       <div class="about__text">
         <h4 class="subtitle">A ATP/PCVB tem como desígnio a promoção externa do Porto e o Norte de Portugal como Destino Turístico de Excelência.</h4>
         <div class="editable big-text">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
       </div>
       <a href="#" class="link link--blue">ver website<span class="icon icon--link"></span></a>
     </div>
     <div class="about__col image">
       <div class="about__img"  style="background-image:url(front/img/photos/photo14.png)"></div>
     </div>
  </div>
 </div>

 <div class="container container--left">
   <div class="about about--right clearfix">
     <div class="about__col image">
       <div class="about__img"  style="background-image:url(front/img/photos/photo15.png)"></div>
     </div>
     <div class="about__col text">
       <div class="about__text">
         <div class="editable big-text">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
       </div>
       <div class="about__dropdown-list">
         <div class="about__dropdown">
           <button data-toggle="collapse" data-target="#show1">
             <p class="text text--caps text--bold">Missão</p><span class="icon icon--caret-down"></span>
           </button>
           <div class="editable text collapse" id="show1">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
           </div>
         </div>
         <div class="about__dropdown">
           <button data-toggle="collapse" data-target="#show2">
             <p class="text text--caps text--bold">Visão</p><span class="icon icon--caret-down"></span>
           </button>
           <div class="editable text collapse" id="show2">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           </div>
         </div>
         <div class="about__dropdown">
           <button data-toggle="collapse" data-target="#show3">
             <p class="text text--caps text--bold">Valores</p><span class="icon icon--caret-down"></span>
           </button>
           <div class="editable text collapse" id="show3">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           </div>
         </div>
       </div>
     </div>
  </div>
 </div>

 <section class="section grey-color">
   <div class="atp-section container container--shrink">
     <div class="atp-section__text">
        <h4 class="atp-section__title subtitle">Política de gestão ATP</h4>
        <div class="text editable">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <h4 class="atp-section__subtitle text text--semibold text--caps">Para almejar tal desiderato, assume-se como pilares fundamentais de uma política de gestão sustentada os seguintes compromissos:</h4>
      <div class="row">
        <div class="col-sm-6">
          <ul class="atp-section__topics">
            <li class="text text--medium">
              <span class="icon icon--help"></span>
              <p>Cumprimento dos requisitos aplicáveis incluindo as disposições legislativas e regulamentares implícitas nas atividades desenvolvidas pela ATP</p>
             </li>
            <li class="text text--medium">
              <span class="icon icon--help"></span>
              <p>Monitorização e desenvolvimento da performance da ATP nos vários domínios das suas atividades</p>
             </li>
            <li class="text text--medium">
              <span class="icon icon--help"></span>
              <p>Cumprimento dos requisitos aplicáveis incluindo as disposições legislativas e regulamentares implícitas nas atividades desenvolvidas pela ATP</p>
             </li>
            <li class="text text--medium">
              <span class="icon icon--help"></span>
              <p>Monitorização e desenvolvimento da performance da ATP nos vários domínios das suas atividades</p>
             </li>
            </ul>
          </div>
          <div class="col-sm-6">
          <ul class="atp-section__topics">
            <li class="text text--medium">
              <span class="icon icon--help"></span>
              <p>Cumprimento dos requisitos aplicáveis incluindo as disposições legislativas e regulamentares implícitas nas atividades desenvolvidas pela ATP</p>
            </li>
            <li class="text text--medium">
              <span class="icon icon--help"></span>
              <p>Monitorização e desenvolvimento da performance da ATP nos vários domínios das suas atividades</p>
            </li>
            <li class="text text--medium">
              <span class="icon icon--help"></span>
              <p>Cumprimento dos requisitos aplicáveis incluindo as disposições legislativas e regulamentares implícitas nas atividades desenvolvidas pela ATP</p>
            </li>
            <li class="text text--medium">
              <span class="icon icon--help"></span>
              <p>Monitorização e desenvolvimento da performance da ATP nos vários domínios das suas atividades</p>
            </li>
          </ul>
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
