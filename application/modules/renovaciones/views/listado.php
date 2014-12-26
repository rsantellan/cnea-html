<table>
  <thead>
    <tr>
      <th>
        Nombre
      </th>
      <th>
        Apellido
      </th>
      <th>
        Documento
      </th>
      <th>
        Correo electronico
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
        <?php echo ($renovacion->nombre); ?>
      </td>
      <td>
        <?php echo ($renovacion->apellido); ?>
      </td>
      <td>
        <?php echo ($renovacion->ci); ?>
      </td>
      <td>
        <?php echo ($renovacion->email); ?>
      </td>
      <td>
        <a href="<?php echo site_url("renovaciones/show/".$renovacion->id);?>">
          Ver
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo site_url("renovaciones/add");?>">
  Agregar
</a>
