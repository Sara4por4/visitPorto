@extends('admin.layouts.layout')



@section('content')

    <div class="row">
        <div class="col-xs-12">
            <a href="{{url('/')}}/sgc/products/" class="pull-left">
                <button type="button" class="btn btn-primary btn-lg">Listagem de produtos</button>
            </a>
            <a href="{{url('/')}}/sgc/products/{{$product->id}}/edit" class="pull-left">
                <button type="button" class="btn btn-info btn-lg">Ficha do produto</button>
            </a>
            <a href="{{url('/')}}/sgc/stocks/{{$product->id}}/create" class="pull-right">
                <button type="button" class="btn btn-success btn-lg">Criar registo</button>
            </a>
        </div>
    </div>


    <div class="x_panel">
        <div class="x_title">
            <h2>Index de stocks: <strong>{{$product->name}}</strong></h2>
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
                                        <th>#</th>
                                        @foreach($product->attributes() as $att)
                                        <th>{{$att->name}}</th>
                                        @endforeach
                                        <th>Preço</th>
                                        <th>Stock</th>
                                        <th style="width: 20%">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable">
                                    @if(! $product->productAttributes->count())
                                        <tr>Não existem produtos registadas</tr>
                                    @else
                                        @foreach($product->productAttributes as $attribute)

                                            <tr id="item-{{$attribute->id}}" class="ui-state-default">
                                                <td>#</td>
                                                @foreach($product->attributes() as $att)
                                                    @if($attribute->stockAttributes->where('attribute_id', $att->id)->count())
                                                    <td>{{$attribute->stockAttributes->where('attribute_id', $att->id)->first()->value}}</td>
                                                    @else
                                                        <th>#</th>
                                                    @endif
                                                @endforeach


                                                <td>
                                                    <a>{{$attribute->price}} {{$attribute->currency}}</a>
                                                </td>
                                                <td>
                                                    <a>{{$attribute->stock}}</a>
                                                </td>
                                                <td>
                                                    <a href="{{url('/')}}/sgc/stocks/{{$attribute->id}}/edit"
                                                       class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar
                                                    </a>
                                                        <button type="button" class="btn btn-danger btn-xs"
                                                                data-toggle="modal" data-target="#delete{{$attribute->id}}">
                                                            <i class="fa fa-trash"></i> Eliminar
                                                        </button>
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
                                                                        Tem a certeza que deseja eliminar este registo de stock em
                                                                        (Todas as línguas)?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-default pull-right"
                                                                            data-dismiss="modal">Cancelar
                                                                    </button>
                                                                    <form style='display: inline-block'
                                                                          action="{{url('/')}}/sgc/stocks/{{$attribute->id}}"
                                                                          method="post">
                                                                        {{csrf_field()}}
                                                                        {{method_field('DELETE')}}
                                                                        <button type="submit" class="btn btn-danger">
                                                                            Eliminar
                                                                        </button>
                                                                    </form>
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

        function listActivateButtons() {
            var $forms = $('.activate-form');

            $forms.each(function () {
                var $form = $(this),
                    $btn_wrapper = $form.find('.active-button');

                $form.on('submit', function (event) {
                    event.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: $form.attr('action'),
                        data: $form.serialize(),
                        success: function (html) {
                            $btn_wrapper.html(html);
                        }
                    });
                });
            });

        }

        listActivateButtons();
    </script>
@endpush