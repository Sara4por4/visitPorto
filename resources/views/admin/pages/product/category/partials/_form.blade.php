<div class="form-group">
    {!! Form::label('name', 'Name*', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('parent_id', 'Pai ', ['class' =>' col-md-3 col-xs-12 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('parent_id', $categories, null, array('class'=>'col-md-7 form-control')) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('attributes', 'Atributos', ['class' =>' col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('attributes[]', $attributes , null, array('class'=>'form-control', 'id'=>'attributes', 'multiple'=>true)) !!}
    </div>
</div>

@component('admin.components.form.textarea')
    @slot('input_name')
        body
    @endslot
    @slot('input_title')
        Texto:
    @endslot
@endcomponent



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

@include('admin.pages.category.partials._assets')
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
        $("#attributes").select2({
            theme: "bootstrap",
            placeholder: 'Escolha attributos',
            allowClear: true,
        });


    </script>
@endpush