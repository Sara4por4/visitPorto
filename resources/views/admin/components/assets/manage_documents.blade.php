
<div class="input-group">
    <a href='' target='_blank' data-inputid="{{$path}}_path" class="btn btn-primary {{$path}}_path">
        <i class="fa  fa-file-pdf-o"></i> Adicionar
    </a>
</div>


<div id="{{$path}}_path">
    @php
        $control = 0;
    @endphp
    @if(!empty($data) && !is_array($data))

    @foreach($data as $asset)
            @if($asset->hasTranslation())

            <div class="col-md-55">
            {!! Form::hidden($path.'[]', !empty($asset) ? $asset->path : null , ['class'=>'col-md-7 col-xs-12 form-control', 'id'=>'thumbnail'.$control]) !!}
            {!! Form::hidden($path.'_id[]', !empty($asset) ? $asset->id : null , ['class'=>'col-md-7 col-xs-12 form-control']) !!}
            <div class="thumbnail">
                <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="/admin/img/pdf_document.png" alt="image">
                    <div class="mask">
                        <div class="tools tools-bottom">
                            <a href="{{ url('/').$asset->path  }}" target="_blank"><i class="fa fa-link"></i></a>
                            <a href="#" class="delete"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>

                <div class="caption">
                    {{Form::text($path.'_author[]', !empty($asset) ? $asset->author : '', ['class'=>'form-control'])}}
                </div>

            </div>
        </div>
        @php
            $control++;
        @endphp
            @endif
    @endforeach
    @endif

    @if(!empty($data) && is_array($data))
        @foreach($data as $key => $value)
        <div class="col-md-55">
            <input type="hidden" value="{{$value}}" name='{{$path}}[]' id="thumbnail{{$control}}">
            <div class="thumbnail">
                <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="/admin/img/pdf_document.png" alt="image">
                    <div class="mask">
                        <div class="tools tools-bottom">
                            <a href="{{$value}}" target="_blank"><i class="fa fa-link"></i></a>
                            <a href="#" class="delete"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>

                <div class="caption">
                    <input type="text" name="{{$path}}_author[]" value="{{old($path.'_author')[$key]}}" class="form-control">
                </div>

            </div>
        </div>
        @php
            $control++;
        @endphp
        @endforeach
    @endif

</div>




@push('scripts')

<script>

    $( function() {
        $("#{{$path}}_path").sortable();
        $("#{{$path}}_path").disableSelection();
    });

    function generatePathDocumentHolder(name_input, value)
    {

        return '<div class="col-md-55">' +
            '<input type="hidden" name="'+ name_input +'[]" value="'+value+'"  data-preview="holder"/>' +
            '<input type="hidden" name="'+ name_input +'_id[]" value="0"/>' +
            '<div class="thumbnail">' +
            '<div class="image view view-first">' +
            '<img style="width: 100%; display: block;" src="/admin/img/pdf_document.png" alt="image" id="holder">' +
            '<div class="mask">' +
            '<p></p>' +
            '<div class="tools tools-bottom">' +
            '<!--<a href="" target="_blank"><i class="fa fa-link"></i></a>-->' +
            '<!--<a href="#"><i class="fa fa-pencil"></i></a>-->' +
            '<a href="#" class="delete"><i class="fa fa-times"></i></a>' +
            '</div>' +
            '</div>'+
            '</div>'+
            '<div class="caption">'+
            '<input type="text" name="'+ name_input +'_author[]" class="form-control" value="">' +
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>';


    }

    $(document).on('click', '.delete', function(){
        $(this).parent().closest('.col-md-55').remove();
    });

    $(document).on('click','.{{$path}}_path',function (event) {
        event.preventDefault();
        var updateID = $(this).attr('data-inputid'); // Btn id clicked
        var elfinderUrl = '/elfinder/popup/';

        // trigger the reveal modal with elfinder inside
        var triggerUrl = elfinderUrl + updateID;
        $.colorbox({
            href: triggerUrl,
            fastIframe: true,
            iframe: true,
            width: '90%',
            height: '90%'
        });

    });
    // function to update the file selected by elfinder
    function processSelectedFile(file, requestingField) {
        var input_key = requestingField.slice(0, -5);
        var urls = $.map(file, function(f) {
            var path = '/'+f.path;
            if(getExtension(path) == 'pdf')
            {
                $('#'+requestingField).append(generatePathDocumentHolder(input_key, path));
            } else {
                $('#'+requestingField).append(generatePathHolder(input_key, path));
            }
        });
    }

    function getExtension(path)
    {
        return path.split('.').pop();
    }


</script>

@endpush