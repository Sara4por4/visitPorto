@extends('admin.layouts.layout')

@section('content')
    <div class="x_panel">
        <div class="x_title clearfix">
            <h2>Lista de expressões</h2>
        </div>

        <div class="dashboard-widget-content">
            <div class="bs-callout bs-callout-info">
                <h4>Pluralização</h4>

                <p>
                    <b>Ex:</b> avião|aviões<br>
                    Quando uma expressão contém as formas singular e plural separadas por |, esta sintaxe deve ser mantida.
                </p>
            </div>

            @if(empty($records))
                <div class="alert alert-info">
                    <p>
                        Não foram encontrados registos.
                    </p>
                </div>
            @else
                {!! Form::open(['action' => 'admin\TranslationsController@store']) !!}
                    @foreach($records as $key => $value)
                        <div class="form-group">
                            {!! Form::text($key, $value, ['class' => "form-control"]) !!}
                        </div>
                    @endforeach

                    {!! Form::button('Guardar', ['type' => "submit", 'class' => "btn btn-primary"]) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endsection