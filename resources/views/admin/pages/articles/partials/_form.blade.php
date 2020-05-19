<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <!-- Begin: Tabs menu -->
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#dados" role="tab" data-toggle="tab">Geral</a>
        </li>
        <li role="presentation" class="">
            <a href="#imagens" role="tab" data-toggle="tab">Imagens</a>
        </li>
    </ul>
    <!-- End: Tabs menu -->

    <div id="myTabContent" class="tab-content">
        <!-- Begin: Tab -->
        <div role="tabpanel" class="tab-pane active fade in" id="dados">
            <div class="form-group">
                {!! Form::label('title', 'Título *', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('title', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('subtitle', 'Sub-título', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('subtitle', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('model__id', 'Página * ', ['class' =>' col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::select('page_id', $pages, null, array('class'=>'form-control')) !!}
                </div>
            </div>

            @component('admin.components.form.textarea')
                @slot('input_name')
                    content
                @endslot
                @slot('input_title')
                    Texto:
                @endslot
            @endcomponent
        </div>
        <!-- End: Tab -->

        <!-- Begin: Tab -->
        <div role="tabpanel" class="tab-pane fade" id="imagens">
            @include('admin.pages.articles.partials._assets')
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