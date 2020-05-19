<div class="x_content">
    <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <!-- Begin: Tabs menu -->
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#page" role="tab" data-toggle="tab">Menu</a>
            </li>
            <li role="presentation" class="">
                <a href="#seo" role="tab" data-toggle="tab">SEO</a>
            </li>
        </ul>
        <!-- End: Tabs menu -->

        <div id="myTabContent" class="tab-content">
            <!-- Begin: Tab -->
            <div role="tabpanel" class="tab-pane active fade in" id="page">
                <div class="form-group">
                    {!! Form::label('name', 'Nome (Display) ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('name', $record->page->name, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('url', 'URL ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('path', $record->page->path, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
                    </div>
                </div>
            </div>
            <!-- End: Tab -->

            <!-- Begin: Tab -->
            <div role="tabpanel" class="tab-pane fade" id="seo">
                    <div class="form-group">
                        {!! Form::label('title', 'Título', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('title', null, ['class'=>'col-md-7 col-xs-12 form-control','maxlength'=> 60]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Description ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('description', null, ['class'=>'col-md-7 col-xs-12 form-control','maxlength'=> 180]) !!}
                        </div>
                    </div>

                <div class="form-group">
                    {!! Form::label('keywords', 'Keywords ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('keywords', null, ['class'=>'col-md-7 col-xs-12 form-control','maxlength'=> 150]) !!}
                    </div>
                </div>
            </div>
            <!-- End: Tab -->
        </div>
    </div>
</div>

<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-success">{{ $submit_btn_txt ?? 'Nome da ação' }}</button>
    </div>
</div>

