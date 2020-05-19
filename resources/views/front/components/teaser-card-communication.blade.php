<div class="teaser-card teaser-card--communication {{ $class }}" onclick="location.href='{{$link}}'">

   <div class="teaser-card__wrap">
      <figure class="teaser-card__img">
         <img src="{{$image}}" alt="">
      </figure>
   </div>

   <div class="teaser-card__caption">
      <div class="teaser-card__header">
         <p class="small-text small-text--caps  small-text--regular">{{ $area }}</p>
         <p class="teaser-card__date small-text small-text--bold">{{ $date }}</p>
      </div>
      <div class="teaser-card__text text text--caps">
         {{ $title }}
      </div>
      <div class="teaser-card__footer">
         <p class="text text--caps">{{ $category }}</p>
      </div>
    </div>

</div>
