<table>
  <thead>
    <tr>
      <th>
        Nombre
      </th>
      <th>
        Descripción
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($list as $acta): ?>
    <tr id="novedad_row_<?php echo $acta->id;?>">
      <td>
        <?php echo ($acta->nombre); ?>
      </td>
      <td>
        <?php echo character_limiter($acta->descripcion, 100); ?>
      </td>
      <td>
        <a href="<?php echo site_url("novedadesadmin/edit/".$acta->id);?>">
          Editar
        </a>
        <a href="javascript:void(0)" onclick="return deleteItem(<?php echo $acta->id;?>, 'Esta seguro de querer eliminar la novedad?', '<?php echo site_url("novedadesadmin/delete/".$acta->id);?>');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("novedadesadmin/add");?>">
  Agregar
</a>
<!--
<a class="fancy_link iframe" href="<?php echo site_url("novedadesadmin/sort");?>" >
  Ordenar
</a>-->
