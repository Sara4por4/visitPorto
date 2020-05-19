<div class="form-group">
    {!! Form::label('name', 'Name*', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('form', 'Nome do formulário*', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('form', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
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
