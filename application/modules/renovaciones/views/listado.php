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
    <?php foreach($listado as $renovacion): ?>
    <tr id="acta_row_<?php echo $renovacion->id;?>">
      <td>
        <?php echo ($acta->nombre); ?>
      </td>
      <td>
        <a href="<?php echo site_url("renovaciones/edit/".$renovacion->id);?>">
          Editar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo site_url("renovaciones/add");?>">
  Agregar
</a>
