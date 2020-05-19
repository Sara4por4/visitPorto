@extends('admin.layouts.layout')


@section('content')
    @component(
        'admin.components.records-list',
        [
            'records' => $records,
            'columns' => [
                '#' => 'id',
                'Morada' => 'address',
                'Criado em' => 'created_at'
            ],
            'actions' => [
                'create' => auth()->user()->hasRole('sudo') ? 'admin\ContactsController@create' : null,
                'edit' => 'admin\ContactsController@edit',
                'destroy' => 'admin\ContactsController@destroy'
            ]
        ]
    )
    @endcomponent
@endsection
