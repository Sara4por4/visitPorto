<div class="cta-card cta-card--newsletter">

   <div class="cta-card__bg" style="background-image:url({{$image}})"></div>
   <div class="cta-card__caption-wrap">
      <div class="cta-card__caption">
         <h4 class="cta-card__subtitle text text--caps text--bold">{{$subtitle}}</h4>
         <h3 class="cta-card__title section-title section-title--caps section-title--bold">{{$title}}</h3>
         <div class="cta-card__text section-title">
            {{ $text }}
         </div>
         <button data-toggle="modal" data-target="#newsletter" type="button" name="button" class="btn btn--white">Subscrever<span class="icon icon--pencil"></span></button>
      </div>
   </div>

</div>
@include('front.components.modal-newsletter')
