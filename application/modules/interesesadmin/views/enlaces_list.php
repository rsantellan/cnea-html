<table>
  <thead>
    <tr>
      <th>
        Nombre
      </th>
	  <th>
        Link
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($intereses_list as $interes): ?>
    <tr id="acta_row_<?php echo $interes->id;?>">
      <td>
        <?php echo ($interes->nombre); ?>
      </td>
	  <td>
        <?php echo ($interes->link); ?>
      </td>
      <td>
        <a href="<?php echo site_url("interesesadmin/edit/enlaces_intereses/".$interes->id);?>">
          Editar
        </a>
        <a href="javascript:void(0)" onclick="return deleteItem(<?php echo $interes->id;?>, 'Esta seguro de querer eliminar el interes?', '<?php echo site_url("actaadmin/delete/".$interes->id);?>');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("interesesadmin/add/enlaces_intereses");?>">
  Agregar
</a>

<a class="fancy_link iframe" href="<?php echo site_url("actaadmin/sort");?>" >
  Ordenar
</a>
