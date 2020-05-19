<div class="form-group">
    {!! Form::label('name', 'Nome ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('email', 'Email ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('email', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
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

<div class="form-group">
    <div class="row">
        <div class="col-xs-12">
        {!! Form::label('role', 'Nível', ['class' =>'col-xs-12 control-label', 'style'=>'text-align:center; font-size: 18px']) !!}
        </div>
        <div class="col-sm-offset-5 col-sm-6 col-xs-12">
        @foreach($roles as $role)
            <label style="margin-right: 20px">
                {!! Form::checkbox('role[]', $role->id, (!empty($record) && $record->hasRole($role->name)) ? true : false) !!} {{$role->label}}
            </label>
        @endforeach
        </div>
    </div>
</div>

<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-success">{{ $submit_btn_txt ?? 'Nome da ação' }}</button>
    </div>
</div>

