<tr id="doceinve_<?php echo $doceinve->id;?>">
  <td><?php echo $doceinve->nombre; ?></td>
  <td><?php echo $doceinve->profesion; ?></td>
  <td><?php echo $doceinve->ocupacion; ?></td>
  <td>
    <a href="<?php echo site_url('registros/editDocenteInvestigador/'.$doceinve->id); ?>" class="fancy_link" title="Editar">Editar</a>
    <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $doceinve->id?>, 'doceinve_<?php echo $doceinve->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeDocenteInvestigador");?>')">Borrar</a>
  </td>
</tr>