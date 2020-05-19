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
               'create' => auth()->user()->can('store_users') ? 'admin\UserController@create' : null,
               'edit' => auth()->user()->can('update_users') ? 'admin\UserController@edit' : null,
               'destroy' => auth()->user()->can('destroy_users') ? 'admin\UserController@destroy' : null
           ],
           'toggleable' => true
        ]
    )
    @endcomponent
@endsection