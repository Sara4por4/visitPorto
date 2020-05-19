<div class="container">
   <div class="about about--sec about--left clearfix">
     <div class="about__col text">
       <div class="about__text">
         <h4 class="subtitle">{{ $title }}</h4>
         <div class="editable big-text">
           {!! $text !!}
         </div>
       </div>
       <div class="about__footer clearfix">
         <p class="small-text small-text--caps">CONTACTO: <span class="small-text--bold">{{ $contact }}</span></p>
         <a href="{{ $link }}" class="link link--blue" target="_blank">ver website<span class="icon icon--link"></span></a>
       </div>
     </div>
     <div class="about__col image">
       <div class="about__img"  style="background-image:url({{ $image }})"></div>
     </div>
  </div>
 </div>
