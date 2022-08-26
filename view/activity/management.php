<?php require_once 'view/template/header.php'; ?>
<h2>Reporte de actividades</h2>
<hr>
<a href="<?=base_url?>Activity/register" 
class="btn btn-primary mb- 2">Crear actividad</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Descripción actividad</th>
            <th>Fecha</th>
            <th>Tiempo empleado</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php while($act = $activities->fetch_object()) :?>
        <tr>
            <td scope="row"><?=$act->id;?></td>
            <td><?=$act->description;?></td>
            <td><?=$act->date;?></td>
            <td><?=$act->time;?></td>
            <td>
                <a class="btn btn-primary" 
                href="<?=base_url?>Activity/tiempo&id=<?=$act->id;?>">Agregar Tiempo</a>
            </td>
        </tr>

        <?php endwhile;?>
    </tbody>
</table>
