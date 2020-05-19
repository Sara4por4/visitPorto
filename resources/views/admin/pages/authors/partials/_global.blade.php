<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active"><a href="#dados" role="tab" id="profile-tab" data-toggle="tab"
                                                  aria-expanded="fale">Geral</a>
        </li>
        <li role="presentation" class=""><a href="#imagens" role="tab" id="profile-tab2" data-toggle="tab"
                                            aria-expanded="false">Imagens</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">

        <div role="tabpanel" class="tab-pane active fade in" id="dados" aria-labelledby="profile-tab">

            <div class="form-group">
                {!! Form::label('name', 'Nome*', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('email', empty($author) ? '' : $author->user()->get()->first()->email, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::input('password', 'password', null, ['class'=>' col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>


            <div class="form-group">
                {!! Form::label('password_confirmation', 'Repetir password', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::input('password', 'password_confirmation', null, ['class'=>' col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="imagens" aria-labelledby="profile-tab2">
            @include('admin.pages.authors.partials._assets')
        </div>
        
    </div>
</div>


<div class="row">
    <div class="col-sm-offset-3 col-sm-6">
        <div class="x_content bs-example-popovers ">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span>
                    </button>
                    <strong>Aviso: </strong> {{$error}}
                </div>
            @endforeach
        </div>

    </div>
</div>
@push('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ url('/')}}/admin/css/icheck/green.css" rel="stylesheet">
    <link href="{{url('/')}}/admin/css/select2/select2.min.css" rel="stylesheet">
    <link href="{{url('/')}}/admin/css/select2/select2-bootstrap.min.css" rel="stylesheet">
    <style>
        .select2-selection__choice {
            background-color: #1ABB9C !important;
            color: white !important;
            font-size: 12px;
            font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
        }

        .select2-selection__choice__remove {
            background-color: #1ABB9C !important;
            color: white !important;

        }

        .select2-results__group {
            font-size: 14px !important;
        }

        .select2-results__options {
            padding-left: 15px !important;
        }

        .select2-search__field {
            width: 100% !important;
        }

        .select2-container--bootstrap {
            width: 100% !important;
        }

    </style>

@endpush

@push('scripts')
    <script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script src="{{url('/')}}/admin/js/select2/select2.min.js"></script>



    <script>
        $("#categories_id").select2({
            theme: "bootstrap",
            placeholder: 'Escolha a categoria relacionado',
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("/sgc/related_category") }}',
                delay: 400,
                data: function (params) {
                    return {
                        q: params.term // search term
                    };
                },
                processResults: function (data) {
                    console.log(data)
                    return {
                        results: $.map(data, function (item) {
                            console.log(item.name);
                            return {
                                text: item.name,
                                id: item.id,
                            }
                        })
                    };
                }
            }
        });

        $("#theme_id").select2({
            theme: "bootstrap",
            placeholder: 'Escolha a categoria relacionado',
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("/sgc/related_themes") }}',
                delay: 400,
                data: function (params) {
                    return {
                        q: params.term // search term
                    };
                },
                processResults: function (data) {
                    console.log(data)
                    return {
                        results: $.map(data, function (item) {
                            console.log(item.name);
                            return {
                                text: item.name,
                                id: item.id,
                            }
                        })
                    };
                }
            }
        });


        $("#products").select2({
            theme: "bootstrap",
            placeholder: 'Escolha os produtos relacionados',

            ajax: {
                dataType: 'json',
                url: '{{ url("/sgc/related_product") }}',
                delay: 400,
                data: function (params) {
                    return {
                        q: params.term // search term
                    };
                },
                processResults: function (data) {
                    console.log(data)
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id,
                            }
                        })
                    };
                }
            }
        })
    </script>
@endpush