<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-delete-<?php echo e($per->idpersona); ?>">

    <?php echo Form::open(array('action'=>array('ProveedorController@destroy', $per->idpersona),'method'=>'delete')); ?>

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
                <h4 class="modal-title">Eliminar Proveedor</h4>

            </div>

            <div class="modal-body">
                <p>Confirme si desea Eliminar el proveedor</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>


    <?php echo Form::close(); ?>


</div>
<?php /**PATH C:\xampp\htdocs\cursolaravel\sisVentas\resources\views/compras/proveedor/modal.blade.php ENDPATH**/ ?>