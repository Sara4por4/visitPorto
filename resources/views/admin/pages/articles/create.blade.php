@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.module-form-page',
        [
            'actions' => [
                'return' => 'admin\ArticlesController@index'
            ]
        ]
    )
        @slot('page_title')
            Criar registo
        @endslot

        {!! Form::open(['action' => 'admin\ArticlesController@store', 'class'=>'form-horizontal form-label-left']) !!}
            @include(
                'admin.pages.articles.partials._form',
                [
                    'submit_btn_txt' => "Criar registo"
                ]
            )
        {!! Form::close() !!}
    @endcomponent
@endsection