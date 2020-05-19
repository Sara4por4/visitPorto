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
                'create' => auth()->user()->can('store_social') ? 'admin\SocialController@create' : null,
                'edit' => auth()->user()->can('update_social') ? 'admin\SocialController@edit' : null,
                'destroy' =>  auth()->user()->can('destroy_social') ? 'admin\SocialController@destroy' : null
            ],
            'toggleable' => auth()->user()->can('update_social'),
            'sortable' => auth()->user()->can('update_social')
        ]
    )
    @endcomponent
@endsection