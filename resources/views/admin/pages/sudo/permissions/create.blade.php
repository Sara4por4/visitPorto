@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.module-form-page',
        [
            'actions' => [
                'return' => 'admin\PermissionController@index'
            ]
        ]
    )
        @slot('page_title')
            Criar registo
        @endslot

        {!! Form::open(['action' => 'admin\PermissionController@store', 'class'=>'form-horizontal form-label-left']) !!}
        @include(
            'admin.pages.sudo.permissions.partials._form',
            [
                'submit_btn_txt' => "Criar registo"
            ]
        )
        {!! Form::close() !!}
    @endcomponent
@endsection