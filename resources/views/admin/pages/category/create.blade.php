@extends('admin.layouts.layout')


@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    @if($model === 'panels')
                        <h2>Novo painel</h2>
                    @else
                    <h2>Nova Categoria</h2>
                    @endif
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
                    {!! Form::open(['url' => route('category.store', ['model'=>$model]), 'class'=>'form-horizontal form-label-left']) !!}

                        @include('admin.pages.category.partials._form')


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                <a href="{{route('category.index', ['model'=> $model])}}">
                                    <button type="button" class="btn btn-primary">Cancelar</button>
                                </a>
                                <button type="submit" class="btn btn-success">Gravar</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>





@endsection