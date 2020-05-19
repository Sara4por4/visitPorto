@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.module-form-page',
        [
            'actions' => [
                'return' => 'admin\UserController@index'
            ]
        ]
    )
        @slot('page_title')
            Criar registo
        @endslot

        {!! Form::open(['action' => 'admin\ShippingMethodsController@store', 'class'=>'form-horizontal form-label-left']) !!}
            @include(
                'admin.pages.shipping_methods.partials._form',
                [
                    'submit_btn_txt' => "Criar registo"
                ]
            )
        {!! Form::close() !!}
    @endcomponent
@endsection