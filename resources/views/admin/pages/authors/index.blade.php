@extends('admin.layouts.layout')

@section('content')

    @include('admin.pages.authors.partials.create-button')



    @component('admin.components.panel', ['title'=>'Listagem de Autores'])
        @slot('content')
            @include('admin.pages.authors.partials.list', ['authors'=>$authors])
        @endslot
    @endcomponent


@endsection
