<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active"><a href="#dados" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="fale">Geral</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane active fade in" id="dados" aria-labelledby="profile-tab">
            <div class="form-group">
                {!! Form::label('title', 'Título*', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('title', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Texto', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('body', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Link', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('link', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="x_content bs-example-popovers ">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>Aviso: </strong> {{$error}}
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    @push('stylesheets')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
    @endpush

    @push('scripts')
        <script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>


        <script>

            $( function() {
                $( "#published_at" ).datepicker(
                    {
                        dateFormat: 'yy-mm-dd',
                        yearRange: "-100:+0",
                        changeMonth: true,
                        changeYear: true,
                    }
                );
            } );

        </script>
@endpush