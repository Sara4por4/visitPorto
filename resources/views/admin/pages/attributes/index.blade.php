@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <a href="{{route('attributes.create')}}" class="pull-right">
                <button type="button" class="btn btn-success btn-lg">Criar registo</button>
            </a>
        </div>
    </div>

    <div class="x_panel">
        <div class="x_title">
            <h2>Attributos dos produtos</h2>
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
                                        <th style="width: 20%">Nome</th>
                                        <th style="width: 20%">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable">
                                    @if(! $attributes->count())
                                        <tr>Não existem atributos registados</tr>
                                    @else
                                        @foreach($attributes as $attribute)

                                            <tr id="item-{{$attribute->id}}" class="ui-state-default">
                                                <td>#</td>
                                                <td>
                                                    <a>{{$attribute->name}}</a>
                                                    <br>
                                                    <small>Criado em {{$attribute->created_at->toDateString()}}</small>
                                                </td>


                                                <td>
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <a href="{{route('attributes.edit', ['id'=>$attribute->id])}}"
                                                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>
                                                                Editar </a>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <a href="{{route('attribute_value.index', ['$attribute'=>$attribute->id])}}"
                                                               class="btn btn-info btn-xs"><i class="fa fa-clone"></i>
                                                                Valores </a>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <button type="button" class="btn btn-danger btn-xs"
                                                                    data-toggle="modal"
                                                                    data-target="#delete{{$attribute->id}}"><i
                                                                        class="fa fa-trash"></i> Eliminar
                                                            </button>
                                                        </div>

                                                        <div class="modal fade bs-example-modal-sm"
                                                             id="delete{{$attribute->id}}" tabindex="-1" role="dialog"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">

                                                                    <div class="modal-header">
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                        <h4 class="modal-title" id="myModalLabel2">
                                                                            Eliminar</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Tem a certeza que deseja eliminar este
                                                                            registo (Todas as línguas)?
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                                class="btn btn-default pull-right"
                                                                                data-dismiss="modal">Cancelar
                                                                        </button>
                                                                        <form style='display: inline-block'
                                                                              action="{{route('attributes.destroy', ['id'=>$attribute->id])}}"
                                                                              method="post">
                                                                            {{csrf_field()}}
                                                                            {{method_field('DELETE')}}
                                                                            <button type="submit"
                                                                                    class="btn btn-danger">Eliminar
                                                                            </button>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
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
        $(function () {
            $("#sortable").sortable({
                placeholder: "ui-state-highlight",
                axis: 'y',
                update: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    data += '&_token={{ csrf_token() }}';
                    $.ajax({
                        data: data,
                        type: 'POST',
                        url: '{{url('/')}}/sgc/priority'
                    });
                }
            });
            $("#sortable").disableSelection();

        });

    </script>
@endpush