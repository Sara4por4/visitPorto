<div class="form-group">
    {!! Form::label($input_name, $input_title, ['class' =>'col-xs-12 ']) !!}
    <div class="col-xs-12">
        {!! Form::textarea($input_name, null, ['class'=>'form-control']) !!}
    </div>
</div>

@push('scripts')
<script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="{{url('/')}}/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>


<script>

    $('textarea').ckeditor({
        filebrowserBrowseUrl: '/elfinder/ckeditor',
    });
</script>
@endpush
