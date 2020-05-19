@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Resumo da encomenda</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table">
                        <tbody>
                        <tr>
                           <th>
                               Utilizador:
                           </th>
                            <td>
                                {{$order->user->name}}
                            </td>
                        </tr>
                        <tr>
                            <th>Valor da fatura com IVA: </th>
                            <td>{{$order->total_price}} €</td>
                        </tr>
                        <tr>
                            <th>Método de envio:</th>
                            <td>{{$order->getShippment()->name}}</td>
                        </tr>
                        <tr>
                            <th>Método de Pagamento:</th>
                            <td>{{$order->getPaymentMethod()->title}}

                        </tr>
                        <tr>
                            <th>Status do pagamento:</th>
                            <td>{{$order->getPaymentstatus()}}
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#payment"><i class="fa fa-edit"></i> Editar </button>

                                <div class="modal fade bs-example-modal-sm" id="payment" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel2">Alterar status do pagamento</h4>
                                            </div>
                                            <form style='display: inline-block'  action="{{route('orders.change_payment_stauts', ['id'=>$order->id])}}" method="post">

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    {!! Form::label('payment_status_id', 'Status do pagamneto ', ['class' =>'  control-label']) !!}
                                                    <div class="">
                                                        {!! Form::select('payment_status_id', $order->payments_status , $order->payment_status, array('class'=>' form-control')) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                                                    {{csrf_field()}}
                                                    {{method_field('PATCH')}}
                                                    <button  type="submit" class="btn btn-info">Guardar</button>
                                            </div>
                                            </form>

                                        </div>
                                    </div>
                                </div></td></td>
                        </tr>
                        <tr>
                            <th>Status do encomenda:</th>
                            <td>{{$order->status()}}
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#order-status"><i class="fa fa-edit"></i> Editar </button>

                                <div class="modal fade bs-example-modal-sm" id="order-status" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel2">Alterar o status da encomenda</h4>
                                            </div>
                                            <form style='display: inline-block'  action="{{route('orders.change_status', ['id'=>$order->id])}}" method="post">

                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        {!! Form::label('order_status_id', 'Status do pagamneto ', ['class' =>'  control-label']) !!}
                                                        <div class="">
                                                            {!! Form::select('order_status_id', $order->status , $order->order_status, array('class'=>' form-control')) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                                                    {{csrf_field()}}
                                                    {{method_field('PATCH')}}
                                                    <button  type="submit" class="btn btn-info">Guardar</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div></td></td>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Produtos encomendados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Qty</th>
                            <th>Preço unitário</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->getProducts() as $product)
                            <tr>
                                <td><a href="{{$product->options->link}}"
                                       target="_blank"></strong>{{$product->name}}</a></td>
                                <td>{{$product->qty}}</td>
                                <td>{{$product->options->price}} €</td>
                                <td>
                                    {{$product->options->price*$product->qty}} €
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Metódo de envio</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    {{$order->getShippment()->name}}
                    <p><strong>Preço: </strong>{{$order->getShippment()->price}} €</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Morada de envio</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @php
                        $address = $order->getShippingAddress();
                        if(empty($address)){
                            $address = $order->user->member->shippingAddress();

                        }

                    @endphp
                    <p>
                        <strong>Nome:</strong> {{$address->name}}<br>
                        <strong>Morada:</strong> {{$address->address}}<br>
                        <strong>Código postal:</strong> {{$address->post_code}}<br>
                        <strong>Cidade:</strong> {{!empty($address->city) ? $address->city : ''}}<br>

                        <strong>Email:</strong> {{$address->email}}<br>
                        <strong>País:</strong> {{$address->country}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Dados de faturação</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @php
                        $address = $order->getBillingData();
                    if(empty($address)){
                            $address = $order->user->member->billingAddress();

                        }
                    @endphp
                    <p>
                        <strong>Nome:</strong> {{$address->name}}<br>
                        <strong>Morada:</strong> {{$address->address}}<br>
                        <strong>Código postal:</strong> {{$address->post_code}}<br>
                        <strong>Cidade:</strong>{{!empty($address->city) ? $address->city : ''}}<br>
                        <strong>Email:</strong> {{$address->email}}<br>
                        <strong>País:</strong> {{$address->country}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Voucher</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if(!empty($order->getVoucher()))
                        <p>
                        <strong>Código:</strong>{{$order->getVoucher()->code}}<br>
                        <strong>Desconto:</strong>{{!empty($order->getVoucher()->percent) ? $order->getVoucher()->percent.'%' : $order->getVoucher()->money . '€'}}<br>
                        </p>

                    @else
                        <p>Não foi usada voucher nesta compra</p>
                    @endif
                </div>
            </div>
        </div>


    </div>
@endsection
