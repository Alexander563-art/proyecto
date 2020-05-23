@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    {{-- esta etiqueta me sirve para que mi formulario se vea bien en todos los dispositivos --}}
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado Proveedores <a href="proveedor/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('compras.proveedor.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            {{-- tabla y celdas cabeceras  --}}
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo Documento</th>
                    <th>Número Documento</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </thead>
                {{-- bucle para que me muestre todos los registro de mi tabla persona-cliente --}}
                @foreach ($personas as $per)
                <tr>
                    <td>{{ $per->idpersona}}</td>
                    <td>{{ $per->nombre}}</td>
                    <td>{{ $per->tipo_documento}}</td>
                    <td>{{ $per->num_documento}}</td>
                    <td>{{ $per->telefono}}</td>
                    <td>{{ $per->email}}</td>


                    <td>
                        <a href="{{URL::action('ProveedorController@edit',$per->idpersona)}}"><button
                                class="btn btn-info">Editar</button></a>

                        <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button
                                class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('compras.proveedor.modal')
                @endforeach
            </table>
        </div>
        {{$personas->render()}}
    </div>
</div>

@endsection
