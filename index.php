<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Iniciar Sesion</title>
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="./config/login.php" method="POST">
            <h1>Gestor de Gastos</h1>
            <h2 class="h3 mb-3 fw-normal">Por favor, Iniciar Sesion</h2>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="ejemplo@gmai.com">
                <label for="floatingInput">Correo electronico</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
            </div>
    
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2025</p>
        </form>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>