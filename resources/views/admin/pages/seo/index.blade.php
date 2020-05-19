@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.records-list',
        [
            'records' => $records,
            'columns' => [
                '#' => 'id',
                'Nome' => 'title',
                'Criado em' => 'created_at'
            ],
            'actions' => [
                'edit' => auth()->user()->can('update_seo') ? 'admin\SeoController@edit' : null
            ]
        ]
    )
    @endcomponent
@endsection