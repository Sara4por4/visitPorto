<div class="form-group">
    {!! Form::label('name', 'Nome ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('code', 'Código de ativação ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('code', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('start_date', 'Válido à partir de:', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('start_date', !empty($voucher) && !empty($voucher->start_date) ? $voucher->start_date->toDateString() : null , ['class'=>'col-md-7 col-xs-12 form-control', 'id'=>'start_date']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('end_date', 'Válido até:', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('end_date', !empty($voucher) && !empty($voucher->end_date) ? $voucher->end_date->toDateString() : null , ['class'=>'col-md-7 col-xs-12 form-control', 'id'=>'end_date']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('percent', 'Percentagem', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::number('percent', !empty($voucher) && !empty($voucher->money) ? str_replace(',', '.', (string) $voucher->money) :null, ['class'=>'col-md-7 col-xs-12 form-control', 'step'=>'any']) !!}
    </div>

</div>

<div class="form-group">
    {!! Form::label('money', 'Dinheiro', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::number('money', !empty($voucher) && !empty($voucher->money) ? str_replace(',', '.', (string) $voucher->money) :null, ['class'=>'col-md-7 col-xs-12 form-control', 'step'=>'any']) !!}
    </div>

</div>

<div class="form-group">
    {!! Form::label('message', 'Mensagem', ['class'=>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('message', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>



<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-success">{{ $submit_btn_txt ?? 'Nome da ação' }}</button>
    </div>
</div>


@push('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>


    <script>

        $( function() {
            $( "#start_date" ).datepicker(
                {
                    dateFormat: 'yy-mm-dd',
                    yearRange: "-2:+10",
                    changeMonth: true,
                    changeYear: true,
                }
            );
        } );

        $( function() {
            $( "#end_date" ).datepicker(
                {
                    dateFormat: 'yy-mm-dd',
                    yearRange: "-1:+10",
                    changeMonth: true,
                    changeYear: true,
                }
            );
        } );

    </script>
@endpush

