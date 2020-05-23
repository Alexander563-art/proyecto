<?php $__env->startSection('contenido'); ?>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <h3>Editar Cliente: <?php echo e($persona->nombre); ?></h3>
        <?php if(count($errors)>0): ?>

        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</div>



<?php echo Form::model($persona,['method'=>'PATCH',
'route'=>['cliente.update', $persona->idpersona]]); ?>


<?php echo Form::token(); ?>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required value="<?php echo e($persona->nombre); ?>

                    " class="form-control" placeholder="Nombre">
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Direccion</label>
                <input type="text" name="direccion" value="<?php echo e($persona->direccion); ?>

                        " class="form-control" placeholder="Direccion">
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Documento</label>
                <select name="tipo_documento" class="form-control">
                    <?php if($persona->tipo_documento=='T.I'): ?>
                    <option value="T.I" selected>Tarjeta Identidad</option>
                    <option value="C.C">Cedula</option>
                    <option value="PAS">Pasaporte</option>
                    <?php elseif($persona->tipo_documento=='C.C'): ?>
                    <option value="T.I">Tarjeta Identidad</option>
                    <option value="C.C" selected>Cedula</option>
                    <option value="PAS">Pasaporte</option>
                    <?php else: ?>
                    <option value="T.I">Tarjeta Identidad</option>
                    <option value="C.C">Cedula</option>
                    <option value="PAS" selected>Pasaporte</option>
                    <?php endif; ?>
                </select>
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Número Documento</label>
                <input type="text" name="num_documento" value="<?php echo e($persona->num_documento); ?>

                        " class="form-control" placeholder="Número Documento">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" value="<?php echo e($persona->telefono); ?>

                            " class="form-control" placeholder="Teléfono">
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo e($persona->email); ?>" class="form-control" placeholder="Email">
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>

    </div>

    <?php echo Form::close(); ?>




    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursolaravel\sisVentas\resources\views/ventas/cliente/edit.blade.php ENDPATH**/ ?>