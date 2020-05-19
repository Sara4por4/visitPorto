@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.records-list',
        [
            'records' => $records,
            'columns' => [
                '#' => 'id',
                'Nome' => 'name',
                'Criado em' => 'created_at'
            ],
            'actions' => [
                'create' => 'admin\LanguagesController@create',
                'edit' => 'admin\LanguagesController@edit',
                'destroy' => 'admin\LanguagesController@destroy'
            ],
            'toggleable' => true,
            'sortable' => true
        ]
    )
    @endcomponent
@endsection