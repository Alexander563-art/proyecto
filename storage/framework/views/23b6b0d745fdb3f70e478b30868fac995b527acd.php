<?php $__env->startSection('contenido'); ?>
<div class="row">
    
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado Ingresos <a href="ingreso/create"><button class="btn btn-success">Nuevo</button></a></h3>
        <?php echo $__env->make('compras.ingreso.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            
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
                
                <?php $__currentLoopData = $ingresos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($ing->fecha_hora); ?></td>
                    <td><?php echo e($ing->nombre); ?></td>
                    <td><?php echo e($ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante); ?></td>
                    <td><?php echo e($ing->impuesto); ?></td>
                    <td><?php echo e($ing->total); ?></td>
                    <td><?php echo e($ing->estado); ?></td>

                    <td>
                        <a href="<?php echo e(URL::action('IngresoController@show',$ing->idingreso)); ?>"><button
                                class="btn btn-primary">Detalles</button></a>

                        <a href="" data-target="#modal-delete-<?php echo e($ing->idingreso); ?>" data-toggle="modal"><button
                                class="btn btn-danger">Anular</button></a>



                    </td>
                </tr>
                <?php echo $__env->make('compras.ingreso.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php echo e($ingresos->render()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursolaravel\sisVentas\resources\views/compras/ingreso/index.blade.php ENDPATH**/ ?>