<?php require_once 'view/template/header.php'; ?>
<h2>Registro de actividades</h2>
<hr>
<form class="mb-4" action="<?= base_url ?>Activity/save" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="description">Descripción Actividad</label>
      <input type="text"
        class="form-control" name="description" id="description" placeholder="Descripción de la actividad" value="<?=isset($act) ? $act->description : "" ?>" required>
    </div>
    <button class="btn btn-primary" type="submit">Agregar actividad</button>
  </div>
</form>
<?php
if(isset($response)):  ?>
  <div class="bg bg-success text-white w-25 p-2">
    <strong><?= $response ?></strong>
  </div>
<?php endif; ?>
