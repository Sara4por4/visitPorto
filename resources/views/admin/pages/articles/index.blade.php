@extends('admin.layouts.layout')


@section('content')
    @component(
        'admin.components.records-list',
        [
            'records' => $records,
            'columns' => [
                '#' => 'id',
                'Nome' => 'title',
                'Slug' => 'page_path',
                'Criado em' => 'created_at'
            ],
            'actions' => [
                'create' => auth()->user()->hasRole('sudo') ? 'admin\ArticlesController@create' : null,
                'edit' => auth()->user()->can('update_articles') ? 'admin\ArticlesController@edit' : null,
                'destroy' =>  auth()->user()->hasRole('sudo') ? 'admin\ArticlesController@destroy' : null
            ],
        ]
    )
        <!-- Begin: Filters -->
        {!! Form::open(['method' => "GET", 'action' => 'admin\ArticlesController@index', 'id' => "filter-form"]) !!}
            <div class="form-group">
                <label class="control-label">Filtrar</label>

                <select name="page_id" class="form-control">
                    <option value="%">Todas as categorias</option>
                    @if($pages->count())
                        @foreach($pages as $page)
                            @php
                                $selected = (request('page_id') == $page->id) ? ' selected' : '';
                            @endphp
                            <option value="{{ $page->id }}"{{ $selected }}>{{ $page->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Filtrar</button>
        {!! Form::close() !!}

        <hr>
        <!-- End: Filters -->
    @endcomponent
@endsection