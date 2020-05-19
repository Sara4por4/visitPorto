@if (count($errors->all()) > 0)
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="x_content bs-example-popovers ">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

                        <strong>Aviso: </strong> {{$error}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

@foreach($data as $config)
    <div class="form-group">
        {!! Form::label('name', $config->name, ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text($config->env_key, $config->env_value, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
        </div>
    </div>
@endforeach