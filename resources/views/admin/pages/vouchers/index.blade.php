@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.voucher-list',
        [
           'records' => $vouchers,
           'columns' => [
               '#' => 'id',
               'Nome' => 'name',
               'De' => 'start_date',
               'até'=> 'end_date',


           ],
           'actions' => [
                'create' => auth()->user()->can('store_voucher') ? 'admin\VouchersController@create' : null,
                 'edit' => auth()->user()->can('update_voucher') ? 'admin\VouchersController@edit' : null,
               'destroy' => auth()->user()->can('destroy_voucher') ? 'admin\VouchersController@destroy' : null
           ],
           'toggleable_active' => true,
        ]
    )
    @endcomponent
@endsection