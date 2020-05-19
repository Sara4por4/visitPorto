<form class="form-horizontal" action="" method="get">
    <div class="form-group col-md-6 col-sm-6 col-xs-12" >
        <label>Palavra chave:</label>
        <input type="text" class="form-control"  name="keys" value="{{request('keys') ?? ''}}" placeholder="Escreva palavras chave">
    </div>
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label>Activo:</label>
        <select class="form-control" name="active">
            <option value="">Selecionar</option>
            <option value="1" {{request()->has('active') && request('active') == 1 ? 'selected': ''}}>Sim</option>
            <option value="2" {{request()->has('active') && request('active') == 2 ? 'selected': ''}}>Não</option>
        </select>
    </div>
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label>Promovido:</label>
        <select class="form-control" name="promoted">
            <option value="">Selecionar</option>
            <option value="1" {{request()->has('promoted') && request('promoted') == 1 ? 'selected': ''}}>Sim</option>
            <option value="2" {{request()->has('promoted') && request('promoted') == 2 ? 'selected': ''}}>Não</option>
        </select>
    </div>
    <!-- <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label>Ordenação:</label>
        <select class="form-control" name="order">
            <option value="priority_desc" {{request()->has('order') && request('order') == 'priority_desc' ? 'selected': ''}}>Prioridade</option>
            <option value="priority_asc" {{request()->has('order') && request('order') == 'priority_asc' ? 'selected': ''}}>Prioridade (inverso)</option>
            <option value="title_asc" {{request()->has('order') && request('order') == 'title_asc' ? 'selected': ''}}>Alfabeticamtente (A-Z)</option>
            <option value="title_desc" {{request()->has('order') && request('order') == 'title_desc' ? 'selected': ''}}>Alfabeticamtente (Z-A)</option>
            <option value="created_at_asc" {{request()->has('order') && request('order') == 'created_at_asc' ? 'selected': ''}}>Data da criação (Ascendente)</option>
            <option value="created_at_desc" {{request()->has('order') && request('order') == 'created_at_desc' ? 'selected': ''}}>Data da criação (Descente)</option>
        </select>
    </div> -->


    <div class="col-xs-12 text-right" style="margin-top: 10px">
        <button type="sumbit" class="btn btn-info">Filtrar</button>
    </div>


</form>


