@push('stylesheets')
<link href="{{ url('/')}}/admin/css/icheck/green.css" rel="stylesheet">
<link href="{{url('/')}}/admin/css/select2/select2.min.css" rel="stylesheet">
<link href="{{url('/')}}/admin/css/select2/select2-bootstrap.min.css" rel="stylesheet">
<style>
    .select2-selection__choice {
        background-color: #1ABB9C !important;
        color: white !important;
        font-size: 12px;
        font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
    }
    .select2-selection__choice__remove {
        background-color: #1ABB9C !important;
        color: white !important;
    }
    .select2-results__group
    {
        font-size: 14px !important;
    }
    .select2-results__options
    {
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

<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active"><a href="#dados" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="fale">Geral</a>
        </li>
        <li role="presentation" class=""><a href="#imagens" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Imagens</a>
        </li>
        <li role="presentation" class=""><a href="#seo" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">SEO</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane active fade in" id="dados" aria-labelledby="profile-tab">
            @if(!auth()->user()->author)
            <div class="form-group">
                {!! Form::label('author_id', 'Autor *', ['class' =>' col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('author_id', [null => 'Selecione'] + $authors->pluck('name', 'id')->toArray(),
                    !empty($content) ? $content->author_id : null,
                     array('class'=>' form-control')) !!}
                </div>
            </div>
            @else
                {!! Form::hidden('author_id', auth()->user()->author->id, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
            @endif
            <div class="form-group">
                {!! Form::label('title', 'Título*', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('title', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('event_date', 'Data da noticia', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('published_at', !empty($content) && !empty($content->published_at) ? $content->published_at->toDateString() : null , ['class'=>'col-md-7 col-xs-12 form-control', 'id'=>'published_at']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('article_relation_id', 'Noticias relacionadas', ['class' =>' col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('article_relation_id[]',
                    $related,
                    !empty($content) ? $content->relations->pluck('id')->toArray(): null,
                    array('class'=>' form-control', 'multiple'=>true)) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('tag_id', 'Tags', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::select('tag_id[]', $tags ,!empty($content) ? $content->tags->pluck('id')->toArray() : null, array('class'=>'form-control select2_multiple', 'multiple'=>'multiple', 'id'=>'tags_articles')) !!}
                </div>
            </div>

            @component('admin.components.form.textarea')
                @slot('input_name')
                    body
                @endslot
                @slot('input_title')
                    Texto Primario:
                @endslot
            @endcomponent

            @component('admin.components.form.textarea')
                @slot('input_name')
                    body2
                @endslot
                @slot('input_title')
                    Texto Secundario:
                @endslot
            @endcomponent




        </div>
            <div role="tabpanel" class="tab-pane fade" id="imagens" aria-labelledby="profile-tab2">
                @include('admin.pages.content.partials_assets._news')
            </div>
        <div role="tabpanel" class="tab-pane fade" id="seo" aria-labelledby="profile-tab3">

            <div class="form-group">
                {!! Form::label('description', 'Description ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('description',  !empty($content) ? $content->seo->description : null , ['class'=>'col-md-7 col-xs-12 form-control','maxlength'=> 180]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('keywords', 'Keywords ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('keywords',  !empty($content) ? $content->seo->keywords : null, ['class'=>'col-md-7 col-xs-12 form-control','maxlength'=> 150]) !!}
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
        <script src="{{url('/')}}/admin/js/select2/select2.min.js"></script>

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
            
            $("#tags_articles").select2({
        theme: "bootstrap",
        placeholder: "Escolha os tags às quais pertence o artigo",
        tags: true,
    });
        </script>
@endpush