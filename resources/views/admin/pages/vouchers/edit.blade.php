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
            Editar Voucher #{{ $voucher->name }}
        @endslot

        {!! Form::model($voucher, ['action' => ['admin\VouchersController@update', $voucher], 'method' => "PATCH", 'class'=>'form-horizontal form-label-left']) !!}
            @include(
                'admin.pages.vouchers.partials._form',
                [
                    'submit_btn_txt' => "Criar registo"
                ]
            )
        {!! Form::close() !!}
    @endcomponent
@endsection