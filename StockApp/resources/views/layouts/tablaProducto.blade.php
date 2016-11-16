<table class="table table-hover">
@if(isset($productos))
<thead>
  <th>Nombre</th>
  <th>Descripcion</th>
  <th>Unidad de medida</th>
  <th></th>
</thead>
  <tbody>
    @foreach($productos as $n)
    <tr>
      <td>{{ $n->ProductName }}</td>
      <td>{{ $n->ProductDescription }}</td>
      <td>{{ $n->UnitOfMeasure}}</td>
      <td>
        <a href="productos/{{$n->ProductID}}/edit" class="btn btn-warning btn-xs">Modificar</a>
        <form action="{{route('productos.destroy',$n->ProductID)}}" method="post">
{{csrf_field()}}
<input type="hidden" name="_method" value="delete">
<input type="submit" name="name" value="eliminar" class="btn btn-danger btn-xs">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
@endif
</table>
