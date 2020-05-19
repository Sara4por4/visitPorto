@extends('admin.layouts.layout')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Lista de encomendas</h2>
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
                                        <th style="width: 20%">Utilizador</th>
                                        <th style="width: 10%">Valor</th>
                                        <th style="width: 10%">Pagamento</th>
                                        <th style="width: 10%">Estado</th>

                                        <th style="width: 20%">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable">
                                    @if(! $orders->count())
                                        <tr>Não existem encomendas registadas</tr>
                                    @else
                                        @foreach($orders as $order)

                                            <tr id="item-{{$order->id}}" class="ui-state-default">
                                                <td>#</td>
                                                <td>
                                                    <a>{{$order->user->name}}</a>
                                                    <br>
                                                    <small>Gerada em {{$order->created_at->toDateString()}}</small>
                                                </td>

                                                <td>
                                                    <p>{{$order->total_price}} €</p>
                                                </td>
                                                <td>
                                                    <p>{{$order->getPaymentStatus()}}</p>
                                                </td>
                                                <td>
                                                    <p>{{$order->status()}} </p>
                                                </td>

                                                <td>
                                                    <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <a href="{{route('order.show', ['id'=>$order->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ver </a>
                                                        </div>

                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                        {!! $orders->links() !!}
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
                        url: '{{url('/')}}/sgc/priority'
                    });
                }
            });
            $( "#sortable" ).disableSelection();

        } );


        function activate(class_activate) {

            $(class_activate).each(function () {
                var $form = $(this);

                $form.on('submit', function (e) {
                    e.preventDefault();

                    var data = $(this).serialize();
                    var dom = $(this).find(class_activate + '-button');

                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: data,
                        success: function (data) {
                            dom.html(data);
                            //activate(class_activate);
                        }
                    });
                });
            });
        }

        activate('.activate-form');
        activate('.promove-form')


    </script>
@endpush