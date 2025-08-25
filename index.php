<?php
    require_once('./config/config.php');
    $query = "SELECT gastos.id, descripcion, cantidad, nombre, fecha FROM gastos LEFT JOIN gastos_categorias ON gastos.categoria = gastos_categorias.id";
    $resultado = $pdo->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Gestor de gastos</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <h1>Gastos <a href="./forrmulario-insercion.php" class="btn btn-primary">Añadir</a></h1>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Categoria</th>
                            <th>Fecha de Registro</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $resultado->fetch()){ ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['cantidad']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['fecha']?></td>
                            <td>
                                <a href="./formulario-edicion.php?id=<?php echo $row['id']?>" class="btn btn-warning">Editar</a>
                                <a href="./config/eliminar-gasto.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>