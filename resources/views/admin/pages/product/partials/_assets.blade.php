<div class="x_title">
    <h2>Imagens index <small>Imagens que deverão surgir na listagem dos produtos</small></h2>

    <div class="clearfix"></div>
</div>



    @php
        $data = [];

        if(!empty($product) && !empty($product->getImagesByScope('index')))
        {
            $data = $product->getImagesByScope('index');
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
    <h2>Imagens de detalhe <small>Imagens que deverão surgir no detalhe do produto</small></h2>
    <div class="clearfix"></div>
</div>

@php
    $data = [];
    if(!empty($product) &&  !empty($product->getImagesByScope('show')))
    {
        $data = $product->getImagesByScope('show');
    }
    if(!empty(old('path_show')))
    {
        $data = old('path_show');
    }
@endphp

@component('admin.components.assets.manage_images', ['data'=>$data, 'path'=>'path_show'])

@endcomponent

<div class="clearfix"></div>


@push('stylesheets')
<link href="{{url('/')}}/packages/colorbox/example1/colorbox.css" rel="stylesheet">
@endpush
@push('scripts_lib')
<script type="text/javascript" src="{{url('/')}}/packages/colorbox/jquery.colorbox-min.js"></script>
@endpush
@push('scripts')
<script src="{{url('/')}}/vendor/laravel-filemanager/js/lfm.js"></script>
@endpush
