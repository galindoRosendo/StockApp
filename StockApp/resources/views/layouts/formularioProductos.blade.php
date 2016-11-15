<form class="form-horizontal" role="form" method="POST" action="{{ url('productos') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" placeholder="Nombre">

      @if($errors->has('nombre'))
      <span style="color:red;">{{$errors->first('nombre')}}</span>
      @endif


    </div>
  </div>
  <div class="form-group">
    <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">

      @if($errors->has('descripcion'))
      <span style="color:red;">{{$errors->first('descripcion')}}</span>
      @endif

    </div>
  </div>
  <div class="form-group">
    <label for="unit" class="col-sm-2 control-label">Unidad de Medida</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="unidad" placeholder="Unidad de Medida">

      @if($errors->has('unidad'))
      <span style="color:red;">{{$errors->first('unidad')}}</span>
      @endif

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Agregar</button>
    </div>
  </div>
</form>
