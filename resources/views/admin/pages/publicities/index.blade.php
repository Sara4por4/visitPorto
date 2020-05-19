@extends('admin.layouts.layout')

@section('content')

    @include('admin.pages.publicities.partials.create-button')



    @component('admin.components.panel', ['title'=>'Listagem de Publicidades'])
        @slot('content')
            @include('admin.pages.publicities.partials.list', ['publicities'=>$publicities])
        @endslot
    @endcomponent


@endsection
