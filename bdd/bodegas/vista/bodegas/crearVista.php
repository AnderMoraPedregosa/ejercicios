<?php  require __DIR__. '/../parciales/head.php' ?>

<div class="d-flex justify-content-between mb-4">
    <div>
        <h4>Nueva bodega</h4>
    </div>
    <div>
        <a href="index.php" class="btn btn-warning"><i class="bi bi-arrow-left-circle mr-1"></i>&nbsp;Volver</a>
    </div>
</div>

<form action="" method="get" class="mb-4">

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>

    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
    </div>

    <div class="mb-3">
        <label for="contacto" class="form-label">Persona de contacto</label>
        <input type="text" name="contacto" class="form-control" id="contacto" placeholder="Persona de contacto">
    </div>

    <div class="mb-3">
        <label for="fundacion" class="form-label">Año de fundación</label>
        <input type="text" name="fundacion" class="form-control" id="fundacion" placeholder="Año de fundación">
    </div>
    <div class="mb-3">
        <div class="form-check form-switch">
            <input name="hotel" class="form-check-input" type="checkbox" role="switch" id="hotel" value="1">
            <label class="form-check-label" for="hotel">Dispone de hotel</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check form-switch">
            <input name="restaurante" class="form-check-input" type="checkbox" role="switch" id="restaurante" value="1">
            <label class="form-check-label" for="restaurante">Dispone de restaurante</label>
        </div>
    </div>

    <!-- Campo oculto con la accion -->
    <input type="hidden" name="accion" value="bodega_insertar">

    <button type="submit" class="btn btn-primary">Añadir</button>
</form>
   
<?php require('vista/parciales/footer.php') ?>