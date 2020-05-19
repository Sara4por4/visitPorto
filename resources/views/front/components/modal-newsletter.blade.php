<!-- Modal -->
<div class="modal" id="newsletter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="icon icon--close modal__close" data-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header">
        <h5 class="modal-title text text--bold text--caps">Quer receber a nossa newsletter?</h5>
        <h4 class="text">Deixe-nos o seu email</h4>
      </div>
      <div class="modal-body">
        @include('front.forms.newsletter-form')
      </div>
    </div>
  </div>
</div>
