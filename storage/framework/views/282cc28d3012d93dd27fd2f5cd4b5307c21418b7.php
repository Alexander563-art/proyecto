<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Venta</h3>
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
<?php echo Form::open(array('url'=>'ventas/venta','method'=>'POST','autocomplete'=>'off')); ?>

<?php echo e(Form::token()); ?>

<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <div class="form-group">
            <label for="cliente">Cliente</label>
            <select name="idcliente" id="idcliente" class="form-control selectpicker" data-live-search="true">
                <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($persona->idpersona); ?>"><?php echo e($persona->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
        <div class="form-group">
            <label>Tipo Comprobante</label>
            <select name="tipo_comprobante" class="form-control">
                <option value="Boleta">Boleta</option>
                <option value="Factura">Factura</option>
                <option value="Ticket">Ticket</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
        <div class="form-group">
            <label for="serie_comprobante">Serie comprobante</label>
            <input type="text" name="serie_comprobante" value="<?php echo e(old('serie_comprobante')); ?>" class="form-control"
                placeholder="Serie comprobante...">
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
        <div class="form-group">
            <label for="num_comprobante">Número comprobante</label>
            <input type="text" name="num_comprobante" required value="<?php echo e(old('num_comprobante')); ?>" class="form-control"
                placeholder="Número comprobante...">
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Artículo</label>
                    <select name="pidarticulo" class="form-control selectpicker" id="pidarticulo"
                        data-live-search="true">
                        <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($articulo->idarticulo); ?>_<?php echo e($articulo->stock); ?>_<?php echo e($articulo->precio_promedio); ?>">
                            <?php echo e($articulo->articulo); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="cantidad">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" disabled name="pstock" id="pstock" class="form-control" placeholder="stock">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <label for="precio_venta">Precio venta</label>
                    <input type="number" disabled name="pprecio_venta" id="pprecio_venta" class="form-control"
                        placeholder="P. venta">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <label for="descuento">Descuento</label>
                    <input type="number" name="pdescuento" id="pdescuento" class="form-control" placeholder="P. compra">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                    <thead style="background-color:#A9D0F5">
                        <th>Opciones</th>
                        <th>Artículo</th>
                        <th>Cantidad</th>
                        <th>Precio Venta</th>
                        <th>Descuento</th>
                        <th>Subtotal</th>
                    </thead>
                    <tfoot>
                        <th>TOTAL</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>
                            <h4 id="total">S./ 0.00</h4><input type="hidden" name="total_venta" id="total_venta">
                        </th>
                    </tfoot>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
        <div class="form-group">
            <input name="_token" value="<?php echo e(csrf_token()); ?>" type="hidden"></input>
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </div>
</div>
<?php echo Form::close(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function(){
 $('#bt_add').click(function(){
  agregar();
 });
});

var cont = 0;
total = 0;
subtotal = [];
$("#guardar").hide();
$("#pidarticulo").change(mostrarValores);

function mostrarValores()
{
 datosArticulo=document.getElementById('pidarticulo').value.split('_');
 $("#pprecio_venta").val(datosArticulo[2]);
 $("#pstock").val(datosArticulo[1]);
}

function agregar()
{
 datosArticulo=document.getElementById('pidarticulo').value.split('_');

 idarticulo=datosArticulo[0];
 articulo=$("#pidarticulo option:selected").text();
 cantidad=parseInt($("#pcantidad").val());

 descuento=$("#pdescuento").val();
 precio_venta=parseInt($("#pprecio_venta").val());
 stock=$("#pstock").val();

 if (idarticulo!="" && cantidad!="" && cantidad>0 && descuento!="" && precio_venta!="")
 {
  if (stock >= cantidad)
  {
   subtotal[cont]=(cantidad * precio_venta - descuento);
   total=total + subtotal[cont];

   var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'"></td><td><input type="number" name="descuento[]" value="'+descuento+'"></td><td>'+subtotal[cont]+'</td></tr>';
   cont++;
   limpiar();
   $("#total").html("S./ " + total);
   $("#total_venta").val(total);
   evaluar();
   $('#detalles').append(fila);
  }
  else
  {
   alert('La cantidad a vender supera el stock');
  }
 }
 else
 {
  alert("Error al ingresar el detalle de la venta, revise los datos del articulo");
 }
}
function limpiar()
{
 $("#pcantidad").val("");
 $("#pdescuento").val("");
 $("#pprecio_venta").val("");
}
function evaluar()
{
 if (total > 0)
 {
  $("#guardar").show();
 }
 else
 {
  $("#guardar").hide();
 }
}
function eliminar(index)
{
 total=total - subtotal[index];
 $("#total").html("S./ " + total);
 $("#total_venta").val(total);
 $("#fila" + index).remove();
 evaluar();
}

</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursolaravel\sisVentas\resources\views/ventas/venta/create.blade.php ENDPATH**/ ?>