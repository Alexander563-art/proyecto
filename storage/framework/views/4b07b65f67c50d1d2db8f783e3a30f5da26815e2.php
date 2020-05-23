<?php $__env->startSection('contenido'); ?>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <h3>Editar Artículo: <?php echo e($articulo->nombre); ?></h3>
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



<?php echo Form::model($articulo,['method'=>'PATCH',
'route'=>['articulo.update', $articulo->idarticulo],'files'=>'true']); ?>


<?php echo Form::token(); ?>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required value="<?php echo e($articulo->nombre); ?>

                            " class="form-control">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label>Categoria</label>
            <select name="idcategoria" class="form-control">
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                <?php if($cat->idcategoria==$articulo->idcategoria): ?>
                <option value="<?php echo e($cat->idcategoria); ?>" selected><?php echo e($cat->nombre); ?> </option>
                <?php else: ?>
                <option value="<?php echo e($cat->idcategoria); ?>"><?php echo e($cat->nombre); ?> </option>
                <?php endif; ?>

                }
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" name="codigo" required value="<?php echo e($articulo->codigo); ?>

                                " class="form-control" ">
        </div>
    </div>



    <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" value="<?php echo e($articulo->stock); ?>

                                    " class="form-control" ">
             </div>
    </div>


    <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" value="<?php echo e($articulo->descripcion); ?>

                                    " class="form-control" placeholder="Descripcion">
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" class="form-control">
                    <?php if(($articulo->imagen)!=""): ?>

                    <img src="<?php echo e(asset('imagenes/articulos/'.$articulo->imagen)); ?>" height="250px" width="250px">


                    <?php endif; ?>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursolaravel\sisVentas\resources\views/almacen/articulo/edit.blade.php ENDPATH**/ ?>