@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a href="{{route('category.index', ['model'=> 'Page'])}}" class="btn btn-success pull-right">Categorias</a>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Adcionar novo item menu</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <br>
                    {!! Form::open(['action' => 'admin\MenuController@store', 'class'=>'form-horizontal form-label-left']) !!}


                    @include('admin.pages.menu.partials._register')
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <button type="button" class="btn btn-primary">Cancelar</button>
                            <button type="submit" class="btn btn-success">Submeter</button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>


    <div class="x_panel">
        <div class="x_title">
            <h2>Menu's</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="dashboard-widget-content">
                <div class="hidden-small">
                    <h2 class="line_30"></h2>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <div class="col-md-12 hidden-small">
                                <table class="table table-striped projects">
                                    <thead >
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th>Pai</th>
                                        <th></th>
                                        <th style="width: 20%">Nome</th>
                                        <th>URL (raiz)</th>
                                        <th>Modelo</th>
                                        <th>Status</th>
                                        <th style="width: 20%">#Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable">
                                    @if(! $pages->count())
                                        <tr>Não existem páginas registadas</tr>

                                    @else

                                        @foreach($pages as $page)
                                            <tr id="item-{{$page->id}}">
                                                <td>{{$page->id}}</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a>{{$page->name}}</a>
                                                    <br>
                                                    <small>Criado em {{$page->created_at->toDateString()}}</small>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="{{$page->present()->url}}">{{$page->path}}</a>
                                                </td>
                                                <td>
                                                    <a>{{$page->model}}</a>
                                                </td>
                                                <td>
                                                    {!! Form::model($page, ['action'=>['admin\MenuController@activate', $page->id]]) !!}
                                                    {{method_field('PATCH')}}
                                                    {!! Form::hidden('active', null) !!}
                                                    <button type="submit" class="btn {{$page->active ? 'btn-success' : 'btn-warning'}} btn-xs">{{$page->present()->active}}</button>
                                                    {!! Form::close() !!}
                                                </td>
                                                <td>
                                                    <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                                                    <a href="{{url('/')}}/sgc/menu/{{$page->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                                </td>
                                            </tr>
                                            @foreach($page->getChildrens() as $children)

                                                <tr>
                                                    <td>{{$page->id}}</td>
                                                    <td>{{$page->name}}</td>
                                                    <td></td>
                                                    <td>
                                                        <a>{{$children->name}}</a>
                                                        <br>
                                                        <small>Criado em {{$children->created_at->toDateString()}}</small>
                                                    </td>
                                                    <td>
                                                        <a target="_blank" href="{{$children->present()->url}}">{{$children->path}}</a>
                                                    </td>
                                                    <td>
                                                        <a>{{$children->model}}</a>
                                                    </td>
                                                    <td>
                                                        {!! Form::model($children, ['action'=>['admin\MenuController@activate', $children->id]]) !!}
                                                        {{method_field('PATCH')}}
                                                        {!! Form::hidden('active', null) !!}
                                                        <button type="submit" class="btn {{$children->active ? 'btn-success' : 'btn-warning'}} btn-xs">{{$children->present()->active}}</button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                    <td>
                                                        <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                                                        <a href="{{url('/')}}/sgc/menu/{{$children->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $( function() {
            $( "#sortable" ).sortable({
                placeholder: "ui-state-highlight",
                axis: 'y',
                update: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    data += '&_token={{ csrf_token() }}';
                    $.ajax({
                        data: data,
                        type: 'POST',
                        url: '{{url('/')}}/sgc/priority/page'
                    });
                }
            });
            $( "#sortable" ).disableSelection();

        } );
    </script>
@endpush