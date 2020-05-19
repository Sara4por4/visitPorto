@extends('admin.layouts.layout')


@section('content')

    @if(Auth::user()->hasRole('sudo'))
    <div class="row">
        <div class="col-xs-12">
            <a href="{{url('/')}}/sgc/emails_message/create" class="pull-right">
                <button type="button" class="btn btn-success btn-lg">Criar novo email</button>
            </a>
        </div>

    </div>
    @endif

    <div class="x_panel">
        <div class="x_title">
            <h2>Mensagens autómaticas</h2>

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
                                        <th>Status</th>
                                        <th style="">#Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(! $content->count())
                                        <tr>Não existem mensagens de email automáticas</tr>

                                    @else

                                        @foreach($content as $page)
                                            <tr>
                                                <td>#</td>
                                                <td>
                                                    <a>{{$page->name}}</a>
                                                    <br>
                                                    <small>Criado em {{$page->created_at->toDateString()}}</small>
                                                </td>

                                                <td>
                                                    <div class="col-xs-3">
                                                        <form style='display: inline-block'  action="{{url('/')}}/sgc/emails_message/activate/{{$page->id}}" method="post">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <button type="submit" class="btn {{$page->active ? 'btn-success' : 'btn-warning'}} btn-xs">{{$page->active()}}</button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                                                    <a href="{{url('/')}}/sgc/emails_message/{{$page->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>

                                                    @if(Auth::user()->hasRole('sudo'))
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$page->id}}"><i class="fa fa-trash"></i> Eliminar </button>

                                                    <div class="modal fade bs-example-modal-sm" id="delete{{$page->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                                    </button>
                                                                    <h4 class="modal-title" id="myModalLabel2">Eliminar</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        Tem a certeza que deseja eliminar o presente registo?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                                                                    <form style='display: inline-block'  action="{{url('/')}}/sgc/emails_message/{{$page->id}}" method="post">
                                                                        {{csrf_field()}}
                                                                        {{method_field('DELETE')}}
                                                                        <button  type="submit" class="btn btn-danger">Eliminar</button>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

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
    $('#select_page').on('change', function(){
        $('#filter-form').submit();
    })
</script>


@endpush