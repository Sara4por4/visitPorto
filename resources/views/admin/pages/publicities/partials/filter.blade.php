
<form class="form-horizontal" action="" method="get">
    <div class="form-group col-md-6 col-sm-6 col-xs-12" >
        <label>Titulo:</label>
        <input type="text" class="form-control"  name="keys" value="{{request('keys') ?? ''}}" placeholder="Escreva palavras chave">
    </div>
    <div class="form-group col-sm-6 col-xs-12">
        <label>Pagina:</label>
        <select class="form-control" name="page_id">
            <option value="">Selecionar</option>
            @foreach($possible_pages as $key=>$page )
            <option value="{{$key}}" {{request()->has('page_id') && $key == request('page_id') ? 'selected': ''}}>{{$page}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-6 col-xs-12">
        <label>Secção:</label>
        <select class="form-control" name="section">
            <option value="">Selecionar</option>
            @foreach($possible_sections as $key=>$section )
            <option value="{{$key}}" {{request()->has('section') && $key == request('section') ? 'selected': ''}}>{{$section}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-6 col-xs-12">
        <label>Activo:</label>
        <select class="form-control" name="active">
            <option value="">Selecionar</option>
            <option value="1" {{request()->has('active') && request('active') == 1 ? 'selected': ''}}>Sim</option>
            <option value="2" {{request()->has('active') && request('active') == 2 ? 'selected': ''}}>Não</option>
        </select>
    </div>
    <div class="col-xs-12 text-right" style="margin-top: 10px">
        <button type="sumbit" class="btn btn-info">Filtrar</button>
    </div>
</form>


