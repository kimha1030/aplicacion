<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aplicacion reporte tiempo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <main class="container mx-auto mb-4">
            <!-- Contenido -->
            <div id="content" class="col-md-6 mx-auto mt-4 p-4 bg-white border-2 border-secondary shadow rounded-lg">
                <h2 class="text-center">Inicio sesión</h2>
                <div class="container">
                    <form action="<?=base_url?>user/login" method="POST">
                        <div class="form-group">
                            <label for="username">Usuario</label>
                            <input type="text" class="form-control" name="username" id="username"
                            placeholder="Escriba su usuario" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" 
                            placeholder="Escriba su contraseña" value="" required>
                        </div>
                        <div class="col-md-12 text-center ">
                            <button type="submit" class="btn btn-block btn-primary tx-tfm">Iniciar sesión</button>
                        </div>
                    </form>

            <?php
            if(isset($response)):  ?>
                <div class="bg bg-success text-white w-25 p-2">
                    <strong><?= $response ?></strong>
                </div>
            <?php endif;?>
        </div>
