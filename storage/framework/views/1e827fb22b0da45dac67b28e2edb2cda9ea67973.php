<?php echo Form::open(array('url' => 'almacen/categoria','method'=>'GET','autocomplete'=>'off','role'=>'search')); ?>

<div class="form-group">

    <div class="input-group">

        <input type="text" class="form-control" name="searchText" placeholder="Buscar.." value="<?php echo e($searchText); ?>">
        

        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </span>
    </div>

</div>


<?php echo Form::close(); ?>

<?php /**PATH C:\xampp\htdocs\cursolaravel\sisVentas\resources\views/almacen/categoria/search.blade.php ENDPATH**/ ?>