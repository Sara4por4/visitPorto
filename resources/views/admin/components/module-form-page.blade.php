<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title clearfix">
                <h2>{{ $page_title ?? 'Colocar aqui o título da ação' }}</h2>

                @if(!empty($actions['return']))
                    <a class="btn btn-sm btn-primary pull-right" href="{{ action($actions['return']) }}">Voltar à listagem</a>
                @endif
            </div>

            <div class="x_content">
                <br>

                <!-- Begin: Errors -->
                @if($errors->any())
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-6">
                            <div class="x_content bs-example-popovers ">
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

                                    <strong>Aviso: </strong>

                                    <ul style="margin-top:15px;padding-left:15px;">
                                        <li>
                                            {!! implode('</li><li>', $errors->all()) !!}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- End: Errors -->

                <!-- Begin: Slot (This is where the form goes) -->
                {{ $slot }}
                <!-- End: Slot (This is where the form goes) -->
            </div>
        </div>
    </div>
</div>