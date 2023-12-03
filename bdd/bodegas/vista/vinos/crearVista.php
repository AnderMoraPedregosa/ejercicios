<?php  require __DIR__. '/../parciales/head.php' ?>

<div class="d-flex justify-content-between mb-4">
    <div>
        <h4>Nuevo vino</h4>
    </div>
    <div>
        <!-- Enlace para volver a los detalles de la bodega -->
        <a href="index.php?accion=bodega_detalle&id=<?= $bodega ?>" class="btn btn-warning"><i class="bi bi-arrow-left-circle mr-1"></i>&nbsp;Volver</a>
    </div>
</div>

<!-- Formulario de creacion -->
<form action="index.php" method="get" class="mb-4">

    <input type="hidden" name="bodega" value="<?= $bodega ?>">
    <input type="hidden" name="accion" value="vino_insertar">

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion">
    </div>
    
    <div class="mb-3">
        <label for="ano" class="form-label">Año</label>
        <input type="text" name="ano" class="form-control" id="ano">
    </div>

    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <select class="form-select" id="tipo" name="tipo">
            <option value="Tinto">Tinto</option>
            <option value="Blanco">Blanco</option>
            <option value="Rosado">Rosado</option>
        </select>    
    </div>

    <div class="mb-3">
        <label for="alcohol" class="form-label">Alcohol</label>
        <input type="text" name="alcohol" class="form-control" id="alcohol">
    </div>

    <button type="submit" class="btn btn-primary">Añadir</button>
</form>
<!-- Fin: Formulario de creacion -->
   
<?php require('vista/parciales/footer.php') ?>