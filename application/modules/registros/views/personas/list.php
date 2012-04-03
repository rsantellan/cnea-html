<h4>Listado de personas registradas</h4>
<table>
  <thead>
    <tr>
      <th>
        Nombre
      </th>
	  <th>
        Codigo
      </th>
	  <th>
        Email
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($list as $registro): ?>
    <tr id="registro_row_<?php echo $registro->id;?>">
      <td>
        <?php echo ($registro->name); ?>
      </td>
	  <td>
        <?php echo ($registro->code); ?>
      </td>
	  <td>
        <?php echo ($registro->email); ?>
      </td>
      <td>
        <a href="<?php echo site_url("registros/editPersona/".$registro->id);?>">
          Editar
        </a>
        <a href="javascript:void(0)" onclick="return deleteItem(<?php echo $registro->id;?>, 'Esta seguro de querer eliminar el registro?', '<?php echo site_url("registros/deletePersona/".$registro->id);?>');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("registros/addPersona");?>">
  Agregar
</a>

<a class="fancy_link iframe" href="<?php echo site_url("registros/sortPersonas");?>" >
  Ordenar
</a>
