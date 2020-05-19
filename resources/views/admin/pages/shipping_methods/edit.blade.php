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
            Editar registo #{{ $method->id }}
        @endslot

        {!! Form::model($method, ['action' => ['admin\ShippingMethodsController@update', $method], 'method' => "PATCH", 'class'=>'form-horizontal form-label-left']) !!}
            @include(
                'admin.pages.shipping_methods.partials._form',
                [
                    'submit_btn_txt' => "Gravar alterações"
                ]
            )
        {!! Form::close() !!}
    @endcomponent
@endsection