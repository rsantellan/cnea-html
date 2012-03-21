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
    <?php foreach($actas_list as $acta): ?>
    <tr>
      <td>
        <?php echo ($acta->nombre); ?>
      </td>
      <td>
        <a href="javascript:void(0)">
          Editar
        </a>
        <a href="javascript:void(0)">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("authadmin/register");?>">
  Agregar
</a>

<a class="fancy_link iframe" href="<?php echo site_url("actaadmin/sort");?>" >
  Ordenar
</a>