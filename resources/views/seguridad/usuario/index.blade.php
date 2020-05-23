@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    {{-- esta etiqueta me sirve para que mi formulario se vea bien en todos los dispositivos --}}
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Usuarios <a href="usuario/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('seguridad.usuario.search')
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
                    <th>Email</th>
                    <th>Opciones</th>
                </thead>
                {{-- bucle para que me muestre todos los registro de mi tabla categpria --}}
                @foreach ($usuarios as $use)
                <tr>
                    <td>{{ $use->id}}</td>
                    <td>{{ $use->name}}</td>
                    <td>{{ $use->email}}</td>
                    <td>
                        <a href="{{URL::action('UsuarioController@edit',$use->id)}}"><button
                                class="btn btn-info">Editar</button></a>

                        <a href="" data-target="#modal-delete-{{$use->id}}" data-toggle="modal"><button
                                class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('seguridad.usuario.modal')
                @endforeach
            </table>
        </div>
        {{$usuarios->render()}}
    </div>
</div>

@endsection
