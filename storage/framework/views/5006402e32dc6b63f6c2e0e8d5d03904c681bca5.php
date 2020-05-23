<?php $__env->startSection('contenido'); ?>

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <h3>Listado de Ventas <a href="venta/create"><button class="btn btn-success">Nuevo</button> </a> </h3>
        <!-- Este código me llevará a la formulario de create, osea crea una categoría -->
        <?php echo $__env->make('ventas.venta.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!--Tabla responsive para que se pueda ver en cualquier tipo de sipositivo -->
        <div class="table-responsive">
            <!--Código para que se vea la tabla intuitivo al usuario -->
            <table class="table table-striped table-bordered table-condensed table-hover">
                <!--Agrega celdas dentro de la tabla-->
                <thead>
                    <!--Cabezeras => N° 4 -->
                    <!--En llaves porque estamos trabajando con Laravel-->
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Comprobante</th>
                    <th>Impuesto</th>
                    <th>Total </th>
                    <th>Estado</th>
                    <th>Opciones</th>

                </thead>
                <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ven): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($ven->fecha_hora); ?></td>
                    <td><?php echo e($ven->nombre); ?></td>
                    <td><?php echo e($ven->tipo_comprobante.': '.$ven->serie_comprobante.'-'.$ven->num_comprobante); ?></td>
                    <td><?php echo e($ven->impuesto); ?></td>
                    <td><?php echo e($ven->total_venta); ?></td>
                    <td><?php echo e($ven->estado); ?></td>
                    <td>
                        <a href="<?php echo e(URL::action('VentaController@show',$ven->idventa)); ?>" <button
                            class="btn btn-primary">Detalles</button></a>
                        <a href="" data-target="#modal-delete-<?php echo e($ven->idventa); ?>" data-toggle="modal" <button
                            class="btn btn-danger">Anular</button></a> <!-- btn es una clase y se le agrega el estilo-->
                    </td>

                </tr>
                <?php echo $__env->make('ventas.venta.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Si existen 100 filas de registros se mostraran en este bucle for each-->
            </table>
        </div>
        <!-- Fuera del Responsive, mostramos la paginación-->

        <?php echo e($ventas->render()); ?>

        <!-- Método que nos permite la paginación-->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursolaravel\sisVentas\resources\views/ventas/venta/index.blade.php ENDPATH**/ ?>