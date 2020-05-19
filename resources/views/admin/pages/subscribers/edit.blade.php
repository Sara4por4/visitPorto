@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.module-form-page',
        [
            'actions' => [
                'return' => 'admin\SubscribersController@index'
            ]
        ]
    )
        @slot('page_title')
            Editar registo #{{ $record->id }}o
        @endslot

        {!! Form::model($record, ['action' => ['admin\SubscribersController@update', $record->id], 'method' => "PATCH", 'class'=>'form-horizontal form-label-left']) !!}
            @include(
                'admin.pages.subscribers.partials._form',
                [
                    'submit_btn_txt' => "Gravar alterações"
                ]
            )
        {!! Form::close() !!}
    @endcomponent
@endsection