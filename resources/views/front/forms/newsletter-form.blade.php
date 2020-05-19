<form class="form form--contacts form--popup" action="" method="post">

    <div class="form-group">
        <span class="icon icon--user"></span>
        <label class="form-label">Nome da empresa</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>

    <div class="form-group">
        <span class="icon icon--pin"></span>
        <label class="form-label">Cidade e País</label>
        <input type="text" name="address" class="form-control" id="address">
    </div>

    <div class="form-group">
        <span class="icon icon--email"></span>
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
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
