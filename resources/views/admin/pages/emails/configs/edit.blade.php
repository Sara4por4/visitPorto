@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title clearfix">
                    <h2>Editar {{$data->first()->type}}</h2>
                </div>

                <div class="x_content">
                    <br>

                    <!-- Begin: Success message -->
                    @if(Session::has('update_msg'))
                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-6">
                                <div class="alert alert-success">
                                    <p>
                                        O registo foi atualizado com sucesso.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                <!-- End: Success message -->

                    {!! Form::model($data, ['method' => "PATCH", 'action' => array('admin\EmailController@update', $data->first()->type), 'class'=>'form-horizontal form-label-left']) !!}
                    @include('admin.pages.emails.configs.partials._form')

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <button type="submit" class="btn btn-success">Gravar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@endsection