@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $Encabezado }}</div>

                <div class="panel-body">
                  @if(isset($Productos))
                  @include('layouts.formularioProductos')

                  @elseif (isset($Entradas))
                  @include('layouts.formularioEntradas')

                  @elseif (isset($Provedor))
                  @include('layouts.formularioProvedores')
                  @include('layouts.tablaProvedores')

                  @elseif (isset($editProvedor))
                  @include('layouts.editProvedor')

                  @else
                  @include('layouts.dashboard')

                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
