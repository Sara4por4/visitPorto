

@include('admin.pages.product.partials.filter')

<div style="height: 20px; width: 100%">
    <div class="ln_solid"></div>
</div>

<table class="table table-striped projects">
    <thead>
    <tr>
        <th style="width: 1%">#</th>
        <th style="width: 20%">Nome</th>
        <th style="width: 20%">Status</th>
        <th style="width: 20%">Opções</th>
    </tr>
    </thead>
    <tbody id="sortable">
    @if(! $products->count())
        <tr>Não existem produtos registadas</tr>
    @else
        @foreach($products as $product)

            <tr id="item-{{$product->id}}" class="ui-state-default">
                <td>#</td>
                <td>
                    <a>{{$product->name}}</a>
                    <br>
                    <small>Criado em {{$product->created_at->toDateString()}}</small>
                </td>

                <td>
                    {!! Form::model($product->id, ['action'=>['admin\ProductsController@activate', $product->id], 'class'=>'activate-form']) !!}
                    {{method_field('PATCH')}}

                    {!! Form::hidden('active', null) !!}
                    <div class="active-button">
                        <button type="submit" class="btn {{$product->active ? 'btn-success' : 'btn-warning'}} btn-xs">{!! $product->active() !!}</button>

                    </div>

                    {!! Form::close() !!}

                    {!! Form::model($product->id, ['action'=>['admin\ProductsController@promote', $product->id], 'class'=>'promote-form']) !!}
                    {{method_field('PATCH')}}

                    {!! Form::hidden('promoted', null) !!}
                    <div class="active-button">
                        <button type="submit" class="btn {{$product->promoted ? 'btn-success' : 'btn-danger'}} btn-xs">{!! $product->promoted() !!}</button>

                    </div>

                    {!! Form::close() !!}
                </td>

                <td>
                    <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="{{url('/')}}/sgc/products/{{$product->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="{{url('/')}}/sgc/stocks/{{$product->id}}" class="btn btn-info btn-xs"><i class="fa fa-tag"></i> Stock </a>
                        </div>
                        <div class="col-xs-3">
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$product->id}}"><i class="fa fa-trash"></i> Eliminar </button>
                        </div>

                        <div class="modal fade bs-example-modal-sm" id="delete{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <form style='display: inline-block'  action="{{url('/')}}/sgc/products/{{$product->id}}" method="post">
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
                        url: '{{url('/')}}/sgc/priority'
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