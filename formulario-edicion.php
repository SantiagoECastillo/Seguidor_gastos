<?php
    require_once('./config/config.php');
    $id = $_GET['id'];  
    $query = "SELECT * FROM gastos_categorias";
    $resultado = $pdo->query($query);

    $query2 = "SELECT * FROM gastos WHERE id = $id";
    $resultado2 = $pdo->query($query2);
    $record = $resultado2->fetch();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Edicion</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>Gastos <a href="index.php" class="btn btn-dark">Regresar</a></h2>
            </div>
        </div>
         
        <form action="./config/edicion-gasto.php" method="POST">
            <div class="row mt-5"> 
                <div class="col-6">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad" value="<?php echo $record['cantidad'];?>">
                </div>
                <div class="col-6 mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select id="" class="form-select" name="categoria" id="categoria">
                        <option value="0" selected>Seleccione una opcion</option>
                        <?php
                            while($row = $resultado->fetch()){
                        ?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombre'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $record['descripcion'] ?>">
                </div>
                <div class="col-12">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>