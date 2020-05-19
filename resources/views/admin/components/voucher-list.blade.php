<div class="x_panel">
    <div class="x_title clearfix">
        <h2>Lista de vouchers</h2>

        <!-- Begin: Options bar -->
        <div class="pull-right">
            @if(!empty($actions['create']))
                <a href="{{ action($actions['create']) }}" class="btn btn-sm btn-success">Criar registo</a>
            @endif
        </div>
        <!-- End: Options bar -->
    </div>

    {{ $slot }}

    <!-- Begin: Records list -->
    <div class="dashboard-widget-content">
        <div class="dashboard-widget-content">
            @if(! $records->count())
                <div class="alert alert-info">
                    <p>
                        Não foram encontrados registos.
                    </p>
                </div>
            @else
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <!-- Begin: Columns names -->
                            @if(!empty($columns))
                                @foreach($columns as $name => $field)
                                    <th>{{ $name }}</th>
                                @endforeach
                            @endif
                            <!-- End: Columns names -->

                            <!-- Begin: Toggable column -->
                            @if(!empty($toggleable_active))
                                <th style="width: 20%">Status</th>
                            @endif
                            <!-- Begin: Toggable column -->

                            <!-- Begin: Actions column -->
                            @if(!empty($actions['edit']) || !empty($actions['destroy']))
                                <th style="width: 20%" class="text-right">&nbsp;</th>
                            @endif
                            <!-- End: Actions column -->
                        </tr>
                    </thead>

                    <tbody
                            @if(!empty($sortable) || !empty($actions['sort']))
                            id="sortable"
                            @endif
                    >
                        @foreach($records as $record)
                            <tr data-id="{{ $record->id }}" id="item-{{ $record->id }}" class="ui-state-default">
                                <!-- Begin: Attributes -->
                                @if(!empty($columns))
                                    @foreach($columns as $name => $field)
                                        <td>
                                            {{ $record->$field }}
                                        </td>
                                    @endforeach
                                @endif
                                <!-- End: Attributes -->

                                <!-- Begin: Toggleable action -->
                                @if(!empty($toggleable_active) )
                                    <td>
                                        @if(!empty($toggleable_active))
                                            {!! Form::model($record->id, ['method' => "PATCH", 'action' => ['\App\Packages\ToggleManager\ToggleManagerController@toggle', $record->id], 'class'=>'activate-form col-sm-6']) !!}
                                            {!! Form::hidden('model', get_class($records->first())) !!}
                                            <button type="submit" class="btn {{$record->active ? 'btn-success' : 'btn-warning'}} btn-xs">{{ $record->active ? 'Ativo' : 'Inativo' }}</button>
                                            {!! Form::close() !!}
                                        @endif

                                    </td>
                                @endif
                                <!-- End: Toggleable action -->

                                <!-- Begin: Actions -->
                                @if(!empty($actions['edit']) || !empty($actions['destroy']))
                                    <td class="text-right">
                                        <!-- Begin: Edit action -->
                                        @if(!empty($actions['edit']))
                                            <a href="{{ action($actions['edit'], ['id' => $record->id]) }}"
                                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                        @endif
                                        <!-- End: Edit action -->

                                        <!-- Begin: Delete action -->
                                        @if(!empty($actions['destroy']))
                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                                    data-target="#delete{{$record->id}}">
                                                <i class="fa fa-trash"></i> Eliminar
                                            </button>

                                            <!-- Begin: Confirmation message -->
                                            <div class="modal fade bs-example-modal-sm" id="delete{{$record->id}}"
                                                 tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>

                                                            <h4 class="modal-title" id="myModalLabel2">Eliminar</h4>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p>
                                                                Tem a certeza que deseja eliminar este voucher? (Esta acção é irreversível)
                                                            </p>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                    class="btn btn-default pull-right"
                                                                    data-dismiss="modal">Cancelar
                                                            </button>

                                                            {!! Form::open(['action' => [$actions['destroy'], $record->id], 'method' => "DELETE"]) !!}
                                                            {!! Form::button("Eliminar", ['type' => "submit", 'class' => "btn btn-danger"]) !!}
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End: Confirmation message -->
                                        @endif
                                        <!-- End: Delete action -->
                                    </td>
                                @endif
                                <!-- Begin: Actions -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <!-- End: Records list -->
</div>

@if($records->count())
    @if(!empty($sortable))
        @push('scripts')
            <script>
                $(function () {
                    $sortable_rows = $('#sortable');

                    $sortable_rows.sortable({
                        placeholder: "ui-state-highlight",
                        axis: 'y',
                        update: function (event, ui) {
                            var sort_ids = $(this).sortable('toArray', { attribute: 'data-id' }).reverse(),
                                id = $(ui.item).data('id'),
                                new_position = sort_ids.indexOf(id.toString()) + 1,
                                model_name = '{!! addslashes(get_class($records->first())) !!}';

                            $.ajax({
                                url: '{{ action('\App\Packages\PriorityManager\PriorityManagerController@updatePriority') }}',
                                method: 'POST',
                                data: {
                                    id: id,
                                    new_position: new_position,
                                    model: model_name,
                                    _token: '{{ csrf_token() }}'
                                }
                            });
                        }
                    });
                });
            </script>
        @endpush
    @endif

    @if(!empty($actions['sort']))
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
                                url: '{{ action($actions['sort']) }}'
                            });
                        }
                    });
                    $("#sortable").disableSelection();
                });
            </script>
        @endpush
    @endif

        @push('scripts')
                <script>
                    @if(!empty($toggleable_active))
                    listActivateButtons();
                    @endif
                </script>
        @endpush
@endif