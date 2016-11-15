<table class="table table-hover">
  @if(isset($Provedores))
  <thead>
    <th>Id</th>
    <th>Nombre</th>
    <th>Acciones</th>
  </thead>

  <tbody>
    @foreach($Provedores as $p)
    <tr>
      <td>
        {{$p->Supplier_id}}
      </td>
      <td>
        {{$p->SupplierName}}
      </td>
      <td>
          <a href="provedores/{{ $p->Supplier_id }}/edit" class="btn btn-warning btn-xs">Modificar</a>
          <form action="{{ route('provedores.destroy', $p->Supplier_id) }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="name" value="Eliminar" class="btn btn-danger btn-xs">
          </form>
      </td>

    </tr>

    @endforeach
  </tbody>
  @endif
</table>
