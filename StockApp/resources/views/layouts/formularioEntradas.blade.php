<form class="form-horizontal" role="form" method="POST" action="{{ url('entradas') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="SupplierID" class="col-sm-2 control-label">Proveedor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="SupplierID" placeholder="Proveedor">

      @if($errors->has('SupplierID'))
      <span style="color:red;">{{$errors->first('SupplierID')}}</span>
      @endif


    </div>
  </div>
  <div class="form-group">
    <label for="ProductID" class="col-sm-2 control-label">Producto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ProductID" placeholder="Prodcuto">

      @if($errors->has('ProductID'))
      <span style="color:red;">{{$errors->first('ProductID')}}</span>
      @endif

    </div>
  </div>
  <div class="form-group">
    <label for="DeliveryNoteID" class="col-sm-2 control-label">Nota de entrega</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="DeliveryNoteID" placeholder="Nota de entrega">

      @if($errors->has('DeliveryNoteID'))
      <span style="color:red;">{{$errors->first('DeliveryNoteID')}}</span>
      @endif

    </div>
  </div>

  <div class="form-group">
    <label for="DateIn" class="col-sm-2 control-label">Fecha Entrada</label>
    <div class="col-sm-10">
      <div class='input-group date' id='datetimepicker1'>
      <input type="text" class="form-control" name="DateIn" placeholder="Fecha Entrada">
      <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
      </span>
      @if($errors->has('DateIn'))
      <span style="color:red;">{{$errors->first('DateIn')}}</span>
      @endif
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="QuantityIN" class="col-sm-2 control-label">Cantidad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="QuantityIN" placeholder="Cantidad">

      @if($errors->has('QuantityIN'))
      <span style="color:red;">{{$errors->first('QuantityIN')}}</span>
      @endif


    </div>
  </div>
  <div class="form-group">
    <label for="UnitCost" class="col-sm-2 control-label">Precio Unitario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="UnitCost" placeholder="Precio Unitario">

      @if($errors->has('UnitCost'))
      <span style="color:red;">{{$errors->first('UnitCost')}}</span>
      @endif


    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Agregar</button>
    </div>
  </div>
</form>
<script type="text/javascript">
$(document).ready(function(){
  
 $('#datetimepicker1').datepicker({
        'formatDate': 'Y-m-d H:i:s'
    });
});
</script>
