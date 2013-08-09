<tr id="especie_<?php echo $especie->id;?>">
  <td>
    <?php echo $especie->nombre; ?>
  </td>
  <td>
    <?php echo $especie->observacion; ?>
  </td>
  <td>
    <?php echo ($especie->escria == 1)? "Si" : "No"; ?>
  </td>
  <td>
    <?php echo ($especie->esuso == 1)? "Si" : "No"; ?>
  </td>
  <td>
    <a href="<?php echo site_url('registros/editEspecie/'.$especie->id); ?>" class="fancy_link" title="Editar">Editar</a>
    <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $especie->id?>, 'especie_<?php echo $especie->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeEspecie");?>')">Borrar</a>      
  </td>
</tr>