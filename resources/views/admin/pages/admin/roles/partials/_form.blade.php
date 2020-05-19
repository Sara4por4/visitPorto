<div class="form-group">
    {!! Form::label('label', 'Nome ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('label', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6 col-xs-12">
            <div class="row" style="padding-top:20px">
                @foreach($permission_groups as $group)
                    {!! Form::label('', $group->label, ['class' =>'col-xs-12 control-label', 'style'=>'text-align:left; font-size: 18px']) !!}

                    @foreach($group->permissions as $permission)
                        <div class="col-md-12">
                            <label>
                                {!! Form::checkbox('permission_id[]', $permission->id, !empty($record) && $record->hasPermissionById($permission->id)? true : false) !!} {{$permission->label}}
                            </label>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-success">{{ $submit_btn_txt ?? 'Nome da ação' }}</button>
    </div>
</div>
