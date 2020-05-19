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
                {!! Form::label('event_date', 'Data da opinião', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('published_at', !empty($content) && !empty($content->published_at) ? $content->published_at->toDateString() : null , ['class'=>'col-md-7 col-xs-12 form-control', 'id'=>'published_at']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('article_relation_id', 'Opiniões relacionadas', ['class' =>' col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('article_relation_id[]',
                    $related,
                    !empty($content) ? $content->relations->pluck('id')->toArray(): null,
                    array('class'=>' form-control', 'multiple'=>true)) !!}
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
                @include('admin.pages.content.partials_assets._opinions')
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