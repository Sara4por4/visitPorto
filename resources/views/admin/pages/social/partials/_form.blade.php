<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <!-- Begin: Tabs menu -->
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#dados" role="tab" data-toggle="tab">Geral</a>
        </li>
    </ul>
    <!-- End: Tabs menu -->

    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane active fade in" id="dados">
            <div class="form-group">
                {!! Form::label('name', 'Nome*', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('url', 'URL *', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('url', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('text', 'Texto', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('text', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('number', 'Numero associado', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::number('number', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            @if(Auth::user()->hasRole('sudo'))
                <div class="form-group">
                    {!! Form::label('icon', 'Icon', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('icon', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-success">{{ $submit_btn_txt ?? 'Nome da ação' }}</button>
    </div>
</div>

@push('scripts')
    <script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor({
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
    </script>
@endpush