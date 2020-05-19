@extends('admin.layouts.layout')



@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Adcionar novo item menu</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    {!! Form::model($menu, ['action' => array('admin\MenuController@update', $menu->id), 'class'=>'form-horizontal form-label-left']) !!}

                    {{method_field('PATCH')}}

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



@endsection