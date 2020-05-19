<form class="form-horizontal" action="" method="get">
    <div class="form-group col-md-6 col-sm-6 col-xs-12" >
        <label>Palavra chave:</label>
        <input type="text" class="form-control"  name="keys" value="{{request('keys') ?? ''}}" placeholder="Escreva palavras chave">
    </div>
    <div class="form-group col-sm-6 col-xs-12">
        <label>Categoria:</label>
        <select class="form-control" name="category">
            <option value="">Selecionar</option>
            @foreach(\App\Category::where('categorable', 'product')->get() as $cat )
            <option value="{{$cat->id}}" {{request()->has('category') && $cat->id == request('category') ? 'selected': ''}}>{{$cat->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-4 col-xs-4">
        <label>Activo:</label>
        <select class="form-control" name="active">
            <option value="">Selecionar</option>
            <option value="1" {{request()->has('active') && request('active') == 1 ? 'selected': ''}}>Sim</option>
            <option value="2" {{request()->has('active') && request('active') == 2 ? 'selected': ''}}>Não</option>
        </select>
    </div>
    <div class="form-group col-sm-4 col-xs-4">
        <label>Promovido:</label>
        <select class="form-control" name="promoted">
            <option value="">Selecionar</option>
            <option value="1" {{request()->has('promoted') && request('promoted') == 1 ? 'selected': ''}}>Sim</option>
            <option value="2" {{request()->has('promoted') && request('promoted') == 2 ? 'selected': ''}}>Não</option>
        </select>
    </div>
    <div class="form-group col-sm-4 col-xs-4">
        <label>Ordenação:</label>
        <select class="form-control" name="order">
            <option value="priority_desc">Prioridade (Descendente)</option>
            <option value="priority_asc">Prioridade (Ascendente)</option>
            <option value="name_asc">Alfabeticamtente (A-Z)</option>
            <option value="name_desc">Alfabeticamtente (Z-A)</option>
            <option value="created_at_asc">Data da criação (Ascendente)</option>
            <option value="created_at_desc">Data da criação (Descente)</option>
        </select>
    </div>


    <div class="col-xs-12 text-right" style="margin-top: 10px">
        <button type="sumbit" class="btn btn-info">Filtrar</button>
    </div>


</form>


