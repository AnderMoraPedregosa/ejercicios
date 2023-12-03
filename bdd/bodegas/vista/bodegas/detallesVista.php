<?php  require __DIR__. '/../parciales/head.php' ?>

<div class="row g-5 mb-4">
    <!-- Container de vinos -->
    <div class="col-md-6 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Vinos</span>
            <a href="index.php?accion=vino_crear&bodega=<?= $bodega->id ?>" class="btn btn-warning"><i class="bi bi-plus-lg"></i>&nbsp;Nuevo</a>
        </h4>
        <table class="table table-bordered grocery-crud-table table-hover">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($vinos as $vino) : ?>
                
                <tr>
                <td><?= $vino->nombre ?></td>
                <td><?= $vino->tipo ?></td>
                <td>
                    <a class="btn btn-outline-primary" href="index.php?accion=vino_detalle&id=<?= $vino->id ?>&bodega=<?= $bodega->id ?>"><i class="bi bi-eye"></i>&nbsp;Ver</a>
                    <a class="btn btn-outline-danger" href="index.php?accion=vino_eliminar&id=<?= $vino->id ?>&bodega=<?= $bodega->id ?>"><i class="bi bi-trash3"></i>&nbsp;Borrar</a> </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table> 
    </div>
    <!-- Fin de container de vinos -->
    <!-- Inicio: container de detalle bodega-->
    <div class="col-md-6">
        <h4 class="mb-3">Detalles de la bodega</h4>
        <form action="index.php">
            <div class="row g-3">
                <div class="col-12">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $bodega->nombre ?>">
                </div>

                <div class="col-12">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $bodega->direccion ?>">
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $bodega->email ?>" >
                </div>

                <div class="col-12">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $bodega->telefono ?>" >
                </div>
            
                <div class="col-12">
                    <label for="contacto" class="form-label">Persona de contacto</label>
                    <input type="text" class="form-control" id="contacto" name="contacto" value="<?= $bodega->contacto ?>" >
                </div>

                <div class="col-12">
                    <label for="fundacion" class="form-label">Año de fundacion</label>
                    <input type="text" class="form-control" id="fundacion" name="fundacion" value="<?= $bodega->fundacion ?>" >
                </div>
                <div class="col-12">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="hotel" type="checkbox" id="hotel" value="1" <?= $bodega->hotel == 1 ? 'checked' : '' ?>>
                        <label class="form-check-label" for="hotel">¿Dispone de hotel?</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="restaurante" type="checkbox" id="restaurante" value="1" <?= $bodega->restaurante == 1 ? 'checked' : '' ?>>
                        <label class="form-check-label" for="restaurante">¿Dispone de restaurante?</label>
                    </div>
                </div>

                <!-- Campos ocultos necesarios para la accion -->
                <input type="hidden" name="id" value="<?= $bodega->id ?>">
                <input type="hidden" name="accion" value="bodega_actualizar">
                
                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>

<?php require('vista/parciales/footer.php') ?>