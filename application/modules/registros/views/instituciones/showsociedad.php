<tr id="sociedadcivil_<?php echo $sociedadcivil->id;?>">
    <td><?php echo $sociedadcivil->nombre; ?></td>
    <td><?php echo $sociedadcivil->profesion; ?></td>
    <td><?php echo $sociedadcivil->ocupacion; ?></td>
    <td>
      <a href="<?php echo site_url('registros/editSociedad/'.$sociedadcivil->id); ?>" class="fancy_link" title="Editar">Editar</a>
      <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $sociedadcivil->id?>, 'sociedadcivil_<?php echo $sociedadcivil->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeSociedad");?>')">Borrar</a>      
    </td>
</tr>