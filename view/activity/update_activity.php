<?php require_once 'view/template/header.php'; ?>
<h2>Registro de tiempos</h2>
<hr>
<form class="mb-4" action="<?= base_url ?>Activity/saveTime&id=<?=$id?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="description">Descripción Actividad</label>
       <select class="form-control" name="description" id="description">
            <option value ="<?=$activities->id;?>"><?=$activities->description;?></option>
        </select>
    </div>
    <div class="form-group col-md-4">
      <label for="date">Fecha</label>
      <input type="date"
        class="form-control" name="date" id="date" required>
    </div>
    <div class="form-group col-md-4">
      <label for="time">Tiempo</label>
      <input type="number"
        class="form-control" name="time" id="time" placeholder="Horas empleadas en la actividad" value="<?=isset($pro) ? $pro->categoria : "" ?>" required>
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
