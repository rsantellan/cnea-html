<h4>Listado de instituciones registradas</h4>
<table>
  <thead>
    <tr>
      <th>
        Nombre
      </th>
	  <th>
        Naturaleza
      </th>
	  <th>
        Nombre del contacto
      </th>
      <th>
        Mail del contacto
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
        <?php echo ($registro->nombreinsititucion); ?>
      </td>
	  <td>
        <?php echo ($registro->naturaleza); ?>
      </td>
	  <td>
        <?php echo ($registro->nombrecontacto); ?>
      </td>
      <td>
        <?php echo ($registro->mailcontacto); ?>
      </td>
      <td>
        <a href="<?php echo site_url("registros/showInstitucion/".$registro->id);?>">
          Mostrar
        </a>
        <a href="javascript:void(0)" onclick="return deleteItem(<?php echo $registro->id;?>, 'Esta seguro de querer eliminar el registro?', '<?php echo site_url("registros/deleteInstitucion/".$registro->id);?>');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("registros/createinstitucion");?>">
  Agregar
</a>

<a class="fancy_link iframe" href="<?php echo site_url("registros/sortInstituciones");?>" >
  Ordenar
</a>
