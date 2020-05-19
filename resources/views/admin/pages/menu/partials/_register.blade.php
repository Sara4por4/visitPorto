
<div class="form-group">
    {!! Form::label('name', 'Nome (Display) ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('path', 'URL ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('path', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
    <!--
    <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
        <div class="checkbox">
            <label>
                {!! Form::checkbox('external_link', true, !empty($menu) ? (boolean) $menu->external_link : null) !!} Link externo
            </label>
        </div>
    </div>
    -->
</div>



<div class="form-group">
    {!! Form::label('model', 'Modelo ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('model', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('parent_id', 'Filho de:', ['class' =>'col-md-3 col-sm-3 col-xs-12  control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('parent_id', $menus , null, array('class'=>'col-md-7 col-xs-12 form-control')) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('categories', "Menu's", ['class' =>'col-md-3 col-sm-3 col-xs-12  control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('categories[]', $categories , null, array('class'=>'col-md-7 col-xs-12 form-control', 'multiple'=>true)) !!}
    </div>
</div>

<!--
<div class="form-group">
    <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
        <div class="checkbox">
            <label>
            {!! Form::checkbox('has_content', true) !!} Com conteúdo
            </label>
        </div>
    </div>
</div>
-->

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

