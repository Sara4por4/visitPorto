@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.records-list',
        [
            'records' => $records,
            'columns' => [
                '#' => 'id',
                'Label' => 'label'
            ],
            'actions' => [
                'create' => 'admin\PermissionGroupController@create',
                'edit' => 'admin\PermissionGroupController@edit',
                'destroy' => 'admin\PermissionGroupController@destroy'
            ]
        ]
    )
    @endcomponent
@endsection