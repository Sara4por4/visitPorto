@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.module-form-page',
        [
            'actions' => [
                'return' => 'admin\SeoController@index'
            ]
        ]
    )
        @slot('page_title')
            Editar registo #{{ $record->id }}
        @endslot

        {!! Form::model($record, ['action' => ['admin\SeoController@update', $record], 'method' => "PATCH", 'class'=>'form-horizontal form-label-left']) !!}
        @include(
            'admin.pages.seo.partials._form',
            [
                'submit_btn_txt' => "Gravar alterações"
            ]
        )
        {!! Form::close() !!}
    @endcomponent
@endsection