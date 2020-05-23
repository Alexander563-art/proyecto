<?php $__env->startSection('contenido'); ?>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <h3>Nuevo Cliente</h3>
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

<?php echo Form::open(array('url' =>'ventas/cliente' ,'method'=>'POST' ,'autocomplete'=>'off')); ?>

<?php echo Form::token(); ?>


<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required value="<?php echo e(old('nombre')); ?>

                    " class="form-control" placeholder="Nombre">
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Direccion</label>
                <input type="text" name="direccion" value="<?php echo e(old('direccion')); ?>

                        " class="form-control" placeholder="Direccion">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Documento</label>
                <select name="tipo_documento" class="form-control">

                    <option value="T.I">Tarjeta Identidad</option>
                    <option value="C.C">Cedula</option>
                    <option value="PAS">Pasaporte</option>
                </select>
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="codigo">Número Documento</label>
                <input type="text" name="num_documento" value="<?php echo e(old('num_documento ')); ?>

                        " class="form-control" placeholder="Número Documento">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="stock">Teléfono</label>
                <input type="text" name="telefono" value="<?php echo e(old('telefono')); ?>

                            " class="form-control" placeholder="Teléfono">
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Email</label>
                <input type="email" name="email" value="<?php echo e(old('email')); ?>

                            " class="form-control" placeholder="Email">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursolaravel\sisVentas\resources\views/ventas/cliente/create.blade.php ENDPATH**/ ?>