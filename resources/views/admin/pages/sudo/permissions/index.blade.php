@extends('admin.layouts.layout')

@section('content')
    @component(
        'admin.components.records-list',
        [
            'records' => $records,
            'columns' => [
                '#' => 'id',
                'Label' => 'label',
                'Grupo' => 'group_label'
            ],
            'actions' => [
                'create' => 'admin\PermissionController@create',
                'edit' => 'admin\PermissionController@edit',
                'destroy' => 'admin\PermissionController@destroy'
            ]
        ]
    )
        <!-- Begin: Filters -->
        {!! Form::open(['method' => "GET", 'action' => 'admin\PermissionController@index', 'id' => "filter-form"]) !!}
        <div class="form-group">
            <label class="control-label">Filtrar</label>

            <select name="group_id" class="form-control" tabindex="-1">
                <option value="%">Todos os grupos</option>
                @if($groups->count())
                    @foreach($groups as $group)
                        @php
                            $selected = (request('group_id') == $group->id) ? ' selected' : '';
                        @endphp
                        <option value="{{ $group->id }}"{{ $selected }}>{{ $group->label }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Filtrar</button>
        {!! Form::close() !!}

        <hr>
    @endcomponent
@endsection