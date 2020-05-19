<div class="teaser-card teaser-card--region {{$class}}" onclick="location.href='{{$link}}'">

  <div class="teaser-card__wrap">
   <div class="teaser-card__figure-wrap">
      <div class="teaser-card__top">
        <img src="{{$icon}}" alt="">
        <h3 class="text text--medium text--caps">{{$title}}</h3>
      </div>
      <figure class="teaser-card__img">
         <img src="{{$image}}" alt="">
      </figure>
    </div>

      <div class="teaser-card__caption">
         <div class="teaser-card__text">
            {!! $text !!}
         </div>
         <div class="teaser-card__bottom clearfix">
           <!-- <div class="teaser-card__footer-wrap">
             <span class="icon icon--timer"></span>
             <h4><span>Duração: </span>{{$time}}</h4>
           </div> -->
           <a href="#" class="explore-btn">
             <span class="icon icon--compass"></span>
           </a>
         </div>
      </div>

    </div>
</div>
