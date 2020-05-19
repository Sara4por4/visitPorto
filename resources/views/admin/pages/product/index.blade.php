@extends('admin.layouts.layout')

@section('content')

    @include('admin.pages.product.partials.create-button')



    @component('admin.components.panel', ['title'=>'Listagem de produtos'])
        @slot('content')
            @include('admin.pages.product.partials.list', ['products'=>$products])
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xs-12 text-center">
            {!! $products->links() !!}
        </div>
    </div>


@endsection
