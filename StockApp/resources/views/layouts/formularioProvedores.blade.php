@if(session()->has('msj'))
<div class="alert alert-success" role="alert">
{{session('msj')}}
</div>
@endif
@if(session()->has('errMsj'))
<div class="alert alert-danger" role="alert">
{{session('errMsj')}}
</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('provedores') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="SupplierName" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="SupplierName" placeholder="Nombre">

      @if($errors->has('SupplierName'))
      <span style="color:red;">{{$errors->first('SupplierName')}}</span>
      @endif


    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Agregar</button>
    </div>
  </div>
</form>
