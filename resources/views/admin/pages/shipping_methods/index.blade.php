@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.pages.shipping_methods.partials.list',
        [
           'records' => $methods,
           'columns' => [
               '#' => 'id',
               'Nome' => 'name',
               'Preço'=>'price',
               'Desde' => 'created_at'

           ],
           'actions' => [
               'create' => 'admin\ShippingMethodsController@create',
               'edit'=>'admin\ShippingMethodsController@edit',
               'destroy'=>'admin\ShippingMethodsController@destroy',
           ],
           'toggleable_active' => true,
        ]
    )
    @endcomponent
@endsection