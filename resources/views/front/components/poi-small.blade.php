<div class="product-card" onClick="window.location.href='{{ $link }}'">
  <div class="product-card__img" style="background-image:url({{ $image }})"></div>
  <div class="product-card__caption">
    <h3 class="product-card__title small-text small-text--medium">{{ $title }}</h3>
    <div class="product-card__footer">
      <p class="tiny-text"><span class="icon icon--pin"></span>{{ $local }}</p>
      <p class="tiny-text"><span class="icon icon--timer"></span>{{ $time }}</p>
    </div>
  </div>
</div>
