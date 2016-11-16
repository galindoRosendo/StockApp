@if(session()->has('msj'))
<div class="alert alert-success" role="alert">{{ session('msj')}}</div>
@endif
@if(session()->has('msjError'))
<div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif

@if(isset($producto))
<form class="form-horizontal" role="form" method="POST" action="{{ route('productos.update',$producto->ProductID) }}">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="put">
  <div class="form-group">
    <label for="ProductName" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ProductName" value="{{$producto->ProductName}}">

      @if($errors->has('ProductName'))
      <span style="color:red;">{{$errors->first('ProductName')}}</span>
      @endif


    </div>
  </div>
  <div class="form-group">
    <label for="ProductDescription" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ProductDescription" value="{{$producto->ProductDescription}}">

      @if($errors->has('ProductDescription'))
      <span style="color:red;">{{$errors->first('ProductDescription')}}</span>
      @endif

    </div>
  </div>
  <div class="form-group">
    <label for="UnitOfMeasure" class="col-sm-2 control-label">Unidad de Medida</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="UnitOfMeasure" value="{{$producto->UnitOfMeasure}}">

      @if($errors->has('UnitOfMeasure'))
      <span style="color:red;">{{$errors->first('UnitOfMeasure')}}</span>
      @endif

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Agregar</button>
    </div>
  </div>
</form>
@endif
