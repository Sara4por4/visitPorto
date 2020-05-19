<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <!-- Begin: Tabs menu -->
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#dados" role="tab" data-toggle="tab">Geral</a>
        </li>
    </ul>
    <!-- End: Tabs menu -->

    <div id="myTabContent" class="tab-content">
        <!-- Begin: Tab -->
        <div role="tabpanel" class="tab-pane active fade in" id="dados">
            <div class="form-group">
                {!! Form::label('name', 'Nome *', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control', 'id' => "name", 'placeholder' => "Ex: index, create"]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('label', 'Label *', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('label', null, ['class'=>'col-md-7 col-xs-12 form-control', 'id' => "label", 'placeholder' => "Ex: Listar, Criar"]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('group_id', 'Grupo *', ['class' =>' col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::select('group_id', $groups, null, array('placeholder' => "Selecione...", 'class'=>'form-control', 'id'=>'group_id')) !!}
                </div>
            </div>
        </div>
        <!-- End: Tab -->
    </div>
</div>

<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-success">{{ $submit_btn_txt ?? 'Nome da ação' }}</button>
    </div>
</div>