<h3>Enlaces</h3>
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
    <tr id="acta_row_link<?php echo $interes->id;?>">
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
        <a href="javascript:void(0)" onclick="return deleteItem(<?php echo $interes->id;?>, 'Esta seguro de querer eliminar el interes?', '<?php echo site_url("interesesadmin/delete/".$interes->id."/enlaces_intereses");?>', 'acta_row_link<?php echo $interes->id;?>');">
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

<a class="fancy_link iframe" href="<?php echo site_url("interesesadmin/sort/enlaces_intereses");?>" >
  Ordenar
</a>

<hr/>

<h3>Documentos</h3>

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
    <?php foreach($documentos_list as $interes): ?>
    <tr id="acta_row_doc<?php echo $interes->id;?>">
      <td>
        <?php echo ($interes->nombre); ?>
      </td>
	  <td>
        <?php echo ($interes->link); ?>
      </td>
      <td>
        <a href="<?php echo site_url("interesesadmin/edit/documentos_intereses/".$interes->id);?>">
          Editar
        </a>
        <a href="javascript:void(0)" onclick="return deleteItem(<?php echo $interes->id;?>, 'Esta seguro de querer eliminar el interes?', '<?php echo site_url("interesesadmin/delete/".$interes->id."/documentos_intereses");?>', 'acta_row_doc<?php echo $interes->id;?>');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("interesesadmin/add/documentos_intereses");?>">
  Agregar
</a>

<a class="fancy_link iframe" href="<?php echo site_url("interesesadmin/sort/documentos_intereses");?>" >
  Ordenar
</a>