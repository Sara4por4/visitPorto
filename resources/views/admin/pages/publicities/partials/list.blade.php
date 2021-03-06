@include('admin.pages.publicities.partials.filter')
<div style="height: 20px; width: 100%">
    <div class="ln_solid"></div>
</div>

<table class="table table-striped projects">
    <thead>
    <tr>
        <th style="width: 1%">#</th>
        <th style="width: 20%">Nome</th>
        <th style="width: 15%">Pagina</th>
        <th style="width: 15%">Secção</th>
        <th style="width: 20%">Status</th>
        <th style="width: 20%">Opções</th>
    </tr>
    </thead>
    <tbody id="sortable">
    @if(! $publicities->count())
        <tr>Não existem publicidades registados</tr>
    @else
        @foreach($publicities as $publicity)

            <tr id="item-{{$publicity->id}}" class="ui-state-default">
                <td>#</td>
                <td>
                    <a>{{$publicity->title}}</a>
                    <br>
                    <small>Criado em {{$publicity->created_at->toDateString()}}</small>
                </td>

                <td>{{$publicity->page->name}}</td>

                <td>{{$publicity->section_id}}</td>

                <td>
                    {!! Form::model($publicity->id, ['action'=>['admin\PublicityController@activate', $publicity->id], 'class'=>'activate-form']) !!}
                    {{method_field('PATCH')}}

                    {!! Form::hidden('active', null) !!}
                    <div class="active-button">
                        <button type="submit" class="btn {{$publicity->active ? 'btn-success' : 'btn-warning'}} btn-xs">{!! $publicity->active() !!}</button>

                    </div>

                    {!! Form::close() !!}
                </td>

                <td>
                    <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="{{url('/')}}/sgc/publicities/{{$publicity->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                        </div>
                        <div class="col-xs-3">
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$publicity->id}}"><i class="fa fa-trash"></i> Eliminar </button>
                        </div>

                        <div class="modal fade bs-example-modal-sm" id="delete{{$publicity->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <form style='display: inline-block'  action="{{url('/')}}/sgc/publicities/{{$publicity->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button  type="submit" class="btn btn-danger">Eliminar</button>
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
                        url: '{{url('/')}}/sgc/priority/publicities'
                    });
                }
            });
            $( "#sortable" ).disableSelection();

        } );

        function listActivateButtons(form)
        {
            var $forms = $(form);

            $forms.each(function(){
                var $form = $(this),
                    $btn_wrapper = $form.find('.active-button');

                $form.on('submit', function(event){
                    event.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: $form.attr('action'),
                        data: $form.serialize(),
                        success: function( html ) {
                            $btn_wrapper.html(html);
                        }
                    });
                });
            });

        }

        listActivateButtons('.activate-form');
        listActivateButtons('.promote-form');
    </script>
@endpush