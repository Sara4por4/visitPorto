<form class="form form--contacts" action="" method="post">
  <div class="row">

    <div class="form-group col-xs-12 col-sm-8">
        <span class="icon icon--user"></span>
        <label class="form-label">Primeiro e último nome</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>

    <div class="form-group col-xs-12 col-sm-4">
        <span class="icon icon--phone"></span>
        <label class="form-label">Contacto</label>
        <input type="text" name="contact" class="form-control" id="contact">
    </div>

    <div class="form-group col-xs-12">
        <span class="icon icon--email"></span>
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>

    <div class="form-group col-xs-12">
      <span class="icon icon--subject"></span>
        <span class="icon icon--caret-down"></span>
        <select class="form-control" name="subject" class="form-control" id="subject">
          <option disble>Motivo do contacto</option>
          <option value="">1</option>
          <option value="">2</option>
        </select>
    </div>

    <div class="form-group col-xs-12">
        <span class="icon icon--pencil"></span>
        <label class="form-label">Mensagem</label>
        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
    </div>
  </div>

    <div class="form__footer row">
        <div class="col-xs-12 col-sm-8">
          @include('front.components.rgpd')
        </div>
        <div class="col-xs-12 col-sm-4">
            <button type="submit" name="button" class="btn btn--blue"><span>Submeter</span></button>
        </div>
    </div>
</form>
