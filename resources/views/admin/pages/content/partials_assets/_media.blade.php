<div class="x_title">
    <h2>Imagens index <small>Imagens que deverão surgir na listagem da media</small></h2>
    <div class="clearfix"></div>
</div>
    @php
        $data = [];
        if(!empty($images_h))
        {
            $data = $images_h;
        }
        if(!empty(old('path')))
        {
            $data = old('path');
        }
    @endphp
    @component('admin.components.assets.manage_images', ['data'=>$data, 'path'=>'path'])
    @endcomponent

<div class="clearfix"></div>
<div class="x_title">
    <h2>Imagens artigo <small>Imagens que deverão surgir no slideshow do media-imagens (Apenas utilizar para catagoria = imagens)</small></h2>
    <div class="clearfix"></div>
</div>

@php
    $data = [];
    if(!empty($images_r))
    {
        $data = $images_r;
    }
    if(!empty(old('path_show')))
    {
        $data = old('path_show');
    }
@endphp

@component('admin.components.assets.manage_images', ['data'=>$data, 'path'=>'path_show'])

@endcomponent

@push('stylesheets')
<link href="{{url('/')}}/packages/colorbox/example1/colorbox.css" rel="stylesheet">
@endpush
@push('scripts_lib')
<script type="text/javascript" src="{{url('/')}}/packages/colorbox/jquery.colorbox-min.js"></script>
@endpush
@push('scripts')
<script src="{{url('/')}}/vendor/laravel-filemanager/js/lfm.js"></script>
@endpush
