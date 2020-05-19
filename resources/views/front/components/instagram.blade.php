@php

    use Vinkla\Instagram\Instagram;

      $instagram = new Instagram('8727139942.1677ed0.b89d9f4c0c5f49f988f5bff6c93aaba9');
      $images=$instagram->media();


@endphp

<!-- limitar a 12 fotos -->
<div class="slideshow slideshow-instagram swiper-container instagram">
   <div class="swiper-wrapper">

      @foreach ($images as $image)
      <div class="swiper-slide">
         <a href="{{$image->link}}" class="instagram-slideshow__img" target="_blank">
            <div class="instagram__info">
               <p><span class="icon icon--chat"></span>70</p>
               <p><span class="icon icon--heart"></span>70</p>
            </div>
            <img src="{{$image->images->standard_resolution->url}}">
         </a>
      </div>
      @endforeach

   </div>
</div>
