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
               'create' => auth()->user()->can('store_roles') ? 'admin\RoleController@create' : null,
               'edit' => auth()->user()->can('update_roles') ? 'admin\RoleController@edit' : null,
               'destroy' => auth()->user()->can('destroy_roles') ? 'admin\RoleController@destroy' : null
           ]
        ]
    )
    @endcomponent
@endsection