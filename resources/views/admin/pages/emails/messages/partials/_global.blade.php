<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active"><a href="#dados" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="fale">Geral</a>
        </li>

        <li role="presentation" class=""><a href="#emails" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Emails</a>
        </li>
    </ul>

    <div id="myTabContent" class="tab-content">

        <div role="tabpanel" class="tab-pane active fade in" id="dados" aria-labelledby="profile-tab">

            <div class="form-group">
                {!! Form::label('name', 'Nome', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            @if(Auth::user()->hasRole('sudo'))
            <div class="form-group">
                {!! Form::label('action', 'Identificador', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('action', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>
            @endif

            <div class="form-group">
                {!! Form::label('subject', 'Assunto', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('subject', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            @component('admin.components.form.textarea')
                @slot('input_name')
                    body
                @endslot
                @slot('input_title')
                    Corpo do email:
                @endslot
            @endcomponent


            @if(Auth::user()->hasRole('sudo'))
                @component('admin.components.form.textarea')
                    @slot('input_name')
                        instructions
                    @endslot
                    @slot('input_title')
                        Instruções:
                    @endslot
                @endcomponent
            @endif

        </div>

        <div role="tabpanel" class="tab-pane  fade in" id="emails" aria-labelledby="profile-tab2">
            <div class="row">
                @foreach($emails as $email)
                <div class="col-sm-3">
                    <div class="checkbox">
                        <label>

                            {{Form::checkbox('email[]', $email->id, !empty($content->emailReceivers) && $content->emailReceivers->contains($email->id) ? true: null , [])}}{{$email->name}}
                        </label>
                    </div>
                </div>
                @endforeach
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

</div>

