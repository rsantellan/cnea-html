<table>
  <thead>
    <tr>
      <th>
        Nombre
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($actas_list as $acta): ?>
    <tr id="acta_row_<?php echo $acta->id;?>">
      <td>
        <?php echo ($acta->nombre); ?>
      </td>
      <td>
        <a href="<?php echo site_url("actaadmin/edit/".$acta->id);?>">
          Editar
        </a>
        <a href="javascript:void(0)" onclick="return deleteItem(<?php echo $acta->id;?>, 'Esta seguro de querer eliminar la acta?', '<?php echo site_url("actaadmin/delete/".$acta->id);?>');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("actaadmin/add");?>">
  Agregar
</a>

<a class="fancy_link iframe" href="<?php echo site_url("actaadmin/sort");?>" >
  Ordenar
</a>
