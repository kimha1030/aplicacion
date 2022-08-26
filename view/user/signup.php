<h2>Registro de usuarios</h2>

<div class="container">
    <form action="<?=base_url?>user/save" method="POST">
        <div class="form-group">
            <label for="name"></label>
            <input type="text" name="name" id="name" class="form-control" 
            placeholder="Escriba su nombre">
        </div>
            <div class="form-group">
            <label for="username"></label>
            <input type="text" name="username" id="username" class="form-control" 
            placeholder="Escriba su nombre de usuario">
        </div>
            <div class="form-group">
            <label for="password"></label>
            <input type="text" name="password" id="password" class="form-control"
            placeholder="Escriba su contraseña">
        </div>
        <input type="submit" class="btn btn-primary" value="Registrarse"/>
    </form>

    <?php
    if(isset($response)):?>
        <div class="bg bg-success text-white w-25 p-2">
            <strong><?= $response ?></strong>
        </div>
    <?php endif;?>
</div>
