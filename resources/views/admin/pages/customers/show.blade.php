@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Dados do utilizador</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <h5>Dados principais do utilizador: #{{$user->id}}</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>
                                Nome de registo:
                            </th>
                            <td>
                                {{$user->name}}
                            </td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{$user->email}} </td>
                        </tr>
                        <tr>
                            <th>Tipo de utilizador:</th>
                            <td>{{$user->isRetailer() ? 'Revendador' : 'Normal'}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Dados actuais de envio de encomendas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @php

                    $address = $user->member->shippingAddress();

                    @endphp
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>
                                Nome:
                            </th>
                            <td>
                                {{$address->name}}
                            </td>
                        </tr>
                        <tr>
                            <th>Nif:</th>
                            <td>{{$address->nif}} </td>
                        </tr>
                        <tr>
                            <th>Morada:</th>
                            <td>{{$address->address}} </td>
                        </tr>
                        <tr>
                            <th>Código postal:</th>
                            <td>{{$address->post_code}}</td>
                        </tr>
                        <tr>
                            <th>Cidade :</th>
                            <td>{{$address->city}}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{$address->email}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        <div class="col-sm-4">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Dados actuais de recepção encomendas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @php

                        $address = $user->member->billingAddress();

                    @endphp
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>
                                Nome:
                            </th>
                            <td>
                                {{$address->name}}
                            </td>
                        </tr>
                        <tr>
                            <th>Nif:</th>
                            <td>{{$address->nif}} </td>
                        </tr>
                        <tr>
                            <th>Morada:</th>
                            <td>{{$address->address}} </td>
                        </tr>
                        <tr>
                            <th>Código postal:</th>
                            <td>{{$address->post_code}}</td>
                        </tr>
                        <tr>
                            <th>Cidade :</th>
                            <td>{{$address->city}}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{$address->email}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="col-sm-offset-3 col-sm-6">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Resumo de encomendas</h2>
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
                                Número de encomedas:
                            </th>
                            <td>
                                {{$user->orders->count()}}
                            </td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>{{$user->orders->sum('total_price')}} €</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>

    </div>
@endsection
