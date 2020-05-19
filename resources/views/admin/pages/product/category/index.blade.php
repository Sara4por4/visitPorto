@extends('admin.layouts.layout')


@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a href="{{route('category_products.create')}}" class="pull-right">
                <button type="button" class="btn btn-success btn-lg">Criar registro</button>
            </a>
        </div>

    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Categorias de produtos</h2>
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
                                    <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th style="width: 20%">Titulo</th>
                                        <th></th>
                                        <th></th>
                                        <th style="width: 20%">#Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable">
                                    @if(! $categories->count())
                                        <tr>Não existem categorias registadas</tr>

                                    @else

                                        @foreach($categories as $category)

                                            <tr id="item-{{$category->id}}">
                                                <td>{{$category->id}}</td>
                                                <td>
                                                    <a>{{$category->name}}</a>
                                                    <br>
                                                    <small>Criado em {{$category->created_at->toDateString()}}</small>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a href="{{route('category_products.edit', ['id'=>$category->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$category->id}}"><i class="fa fa-trash"></i> Eliminar </button>

                                                    <div class="modal fade bs-example-modal-sm" id="delete{{$category->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                                    </button>
                                                                    <h4 class="modal-title" id="myModalLabel2">Eliminar</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        Tem a certeza que deseja eliminar este registo (Todas as línguas)?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                                                                    <form style='display: inline-block'  action="{{route('category_products.destroy', ['id'=>$category->id])}}" method="post">
                                                                        {{csrf_field()}}
                                                                        {{method_field('DELETE')}}
                                                                        <button  type="submit" class="btn btn-danger">Eliminar</button>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                                @if($category->hasChildrens())
                                                    @foreach($category->childrens()->get() as $item)
                                                        <tr >
                                                            <td>#</td>
                                                            <td style="padding-left:20px;">
                                                                <a>{{$item->name}}</a>
                                                                <br>
                                                                <small>Criado em {{$item->created_at->toDateString()}}</small>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <a href="{{route('category_products.edit', ['id'=>$item->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$item->id}}"><i class="fa fa-trash"></i> Eliminar </button>

                                                                <div class="modal fade bs-example-modal-sm" id="delete{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">

                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                                                </button>
                                                                                <h4 class="modal-title" id="myModalLabel2">Eliminar</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>
                                                                                    Tem a certeza que deseja eliminar este registo (Todas as línguas)?
                                                                                </p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                                                                                <form style='display: inline-block'  action="{{route('category_products.destroy', ['id'=>$item->id])}}" method="post">
                                                                                    {{csrf_field()}}
                                                                                    {{method_field('DELETE')}}
                                                                                    <button  type="submit" class="btn btn-danger">Eliminar</button>
                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                @endif
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
                        url: '{{url('/')}}/sgc/priority/category'
                    });
                }
            });
            $( "#sortable" ).disableSelection();

        } );
    </script>

@endpush