@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.customers-list',
        [
           'records' => $customers,
           'columns' => [
               '#' => 'id',
               'Nome' => 'name',
               'Desde' => 'created_at'

           ],
           'actions' => [
                'show' => 'admin\CustomersController@show',
               'destroy' => auth()->user()->can('destroy_users') ? 'admin\UserController@destroy' : null
           ],
           'toggleable_active' => true,
           'toggleable_type'=>true,
        ]
    )
    @endcomponent
@endsection