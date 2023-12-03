<?php  require __DIR__. '/../parciales/head.php' ?>

<div class="px-4 py-3 my-2 text-center">
    <h1 class="display-5 fw-bold">Gestión de bodegas</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Bienvenido a la aplicación de aprendizaje Gestión de Bodegas. Este ejercicio tiene como objetivo repasar el acceso a datos mediante PDO y comenzar a separar la lógica de las páginas de la presentación y del acceso a datos.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="?accion=bodega_crear" class="btn btn-primary btn-lg px-4 gap-3">Crear bodega</a>
        <a href="index.php" class="btn btn-outline-secondary btn-lg px-4">Ver bodegas</a>
        </div>
    </div>
</div>

<!-- Tabla con listado de bodegas -->
<table class="table table-bordered grocery-crud-table table-hover">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Localización</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody> 
        
    <?php foreach ($bodegas as $bodega) : ?>

        <tr>
        <td><?= $bodega->nombre ?></td>
        <td><?= $bodega->direccion ?></td>
        <td><?= $bodega->telefono ?></td>
        <td><?= $bodega->email ?></td>
        <td>
            <a class="btn btn-outline-primary" href="index.php?accion=bodega_detalle&id=<?= $bodega->id ?>"><i class="bi bi-pencil-square"></i>&nbsp;&nbsp;Entrar</a>
            <a class="btn btn-outline-danger" href="index.php?accion=bodega_eliminar&id=<?= $bodega->id ?>"><i class="bi bi-trash3"></i>&nbsp;&nbsp;Borrar</a>
        </td>
        </tr>

    <?php endforeach; ?>
              

    </tbody>
</table>
<!-- Fin: Tabla con listado de bodegas -->

<?php require('vista/parciales/footer.php') ?>