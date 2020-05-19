<div class="x_title">
    <h2>Imagens index <small>Imagens que deverão surgir na listagem das noticias</small></h2>
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
    <h2>Imagens detalhe <small>Imagens que deverão surgir no meio da dos 2 textos da noticia</small></h2>
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
