<?php


?>

<table>
  <thead>
    <tr>
      <th>
        Usuario
      </th>
      <th>
        Mail
      </th>
      <th>
        Activo
      </th>
      <th>
        Baneado
      </th>
      <th>
        Creado el
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($user_list as $user): ?>
    <tr>
      <td>
        <?php echo ($user->username); ?>
      </td>
      <td>
        <?php echo ($user->email); ?>
      </td>
      <td>
        <?php echo ($user->activated); ?>
      </td>
      <td>
        <?php echo ($user->banned); ?>
      </td>
      <td>
        <?php echo ($user->created); ?>
      </td>
      <td>
        <a href="javascript:void(0)">
          Activar
        </a>
        <a href="javascript:void(0)">
          Des Activar
        </a>
        <a href="javascript:void(0)">
          Bannear
        </a>
        <a href="javascript:void(0)">
          Des Bannear
        </a>
        <a href="javascript:void(0)">
          Editar
        </a>
        <a href="javascript:void(0)">
          Resetear pass
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