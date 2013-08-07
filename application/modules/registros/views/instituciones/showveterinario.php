<tr id="veterinario_<?php echo $veterinario->id;?>">
    <td><?php echo $veterinario->nombre; ?></td>
    <td><?php echo $veterinario->profesion; ?></td>
    <td><?php echo $veterinario->ocupacion; ?></td>
    <td>
      <a href="<?php echo site_url('registros/editVeterinario/'.$veterinario->id); ?>" class="fancy_link" title="Editar">Editar</a>
      <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $veterinario->id?>, 'veterinario_<?php echo $veterinario->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeVeterinario");?>')">Borrar</a>      
    </td>
</tr>