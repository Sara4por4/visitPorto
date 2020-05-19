@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.records-list',
        [
            'records' => $records,
            'columns' => [
                '#' => 'id',
                'Nome' => 'name',
                'E-mail' => 'email',
                'Criado em' => 'created_at'
            ],
            'actions' => [
                'create' => 'admin\SubscribersController@create',
                'edit' => 'admin\SubscribersController@edit',
                'destroy' => 'admin\SubscribersController@destroy'
            ]
        ]
    )
        @can('excel_subscriber')
            @slot('options')
                <a href="{{url('/')}}/sgc/excel/subscribers" class="btn btn-sm btn-warning">Obter excel</a>
            @endslot
        @endif
    @endcomponent
@endsection