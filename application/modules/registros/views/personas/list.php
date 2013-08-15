<h4>Listado de personas registradas</h4>
<table>
  <thead>
    <tr>
      <th>
        Nombre Persona
      </th>
	  <th>
        Nombre Institucion
      </th>
	  <th>
        Email
      </th>
      <th>
        Categoria
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($list as $registro): ?>
    <?php //var_dump($registro);?>
    <tr id="registro_row_<?php echo $registro->id;?>">
      <td>
        <?php echo ($registro->nombreapellido); ?>
      </td>
	  <td>
        <?php echo ($registro->nombreinsititucion); ?>
      </td>
	  <td>
        <?php echo ($registro->direccionelectronica); ?>
      </td>
      <td>
        <?php echo ($registro->categoria); ?>
      </td>
      <td>
        <a href="<?php echo site_url("registros/showPersona/".$registro->id);?>">
          Mostrar
        </a>
        <a href="javascript:void(0)" onclick="return deleteItem(<?php echo $registro->id;?>, 'Esta seguro de querer eliminar el registro?', '<?php echo site_url("registros/deletePersona/".$registro->id);?>');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("registros/createacreditacion");?>">
  Agregar
</a>

<a class="fancy_link iframe" href="<?php echo site_url("registros/sortPersonas");?>" >
  Ordenar Instituciones
</a>
<a class="fancy_link iframe" href="<?php echo site_url("registros/sortPersonasEnInstituciones");?>" >
  Ordenar Personas
</a>