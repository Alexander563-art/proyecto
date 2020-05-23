@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    {{-- esta etiqueta me sirve para que mi formulario se vea bien en todos los dispositivos --}}
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado Ingresos <a href="ingreso/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('compras.ingreso.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            {{-- tabla y celdas cabeceras  --}}
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>

                    <th>Fecha</th>
                    <th>Proveedor</th>
                    <th>Comprobante</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </thead>
                {{-- bucle para que me muestre todos los registro de mi tabla ingreso-detalle --}}
                @foreach ($ingresos as $ing)
                <tr>

                    <td>{{ $ing->fecha_hora}}</td>
                    <td>{{ $ing->nombre}}</td>
                    <td>{{ $ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante}}</td>
                    <td>{{ $ing->impuesto}}</td>
                    <td>{{ $ing->total}}</td>
                    <td>{{ $ing->estado}}</td>

                    <td>
                        <a href="{{URL::action('IngresoController@show',$ing->idingreso)}}"><button
                                class="btn btn-primary">Detalles</button></a>

                        <a href="" data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal"><button
                                class="btn btn-danger">Anular</button></a>



                    </td>
                </tr>
                @include('compras.ingreso.modal')
                @endforeach
            </table>
        </div>
        {{$ingresos->render()}}
    </div>
</div>

@endsection
