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
        <?php if($user->activated == "0"): ?>
        <a href="<?php echo site_url('authadmin/activate/'.$user->id); ?>">
          Activar
        </a>
        <?php else: ?>
        <a href="<?php echo site_url('authadmin/deactivate/'.$user->id); ?>">
          Des Activar
        </a>
        <?php endif; ?>
        <?php if($user->banned == "0"): ?>
        <a href="<?php echo site_url('authadmin/banUser/'.$user->id); ?>">
          Bannear
        </a>
        <?php else: ?>
        <a href="<?php echo site_url('authadmin/unbanUser/'.$user->id); ?>">
          Des Bannear
        </a>
        <?php endif; ?>
        <a href="javascript:void(0)">
          Cambiar mail
        </a>
        <a href="javascript:void(0)">
          Resetear pass
        </a>
        <a href="<?php echo site_url('authadmin/deleteUser/'.$user->id); ?>">
          Eliminar
        </a>
        <?php //var_dump($user); ?>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo site_url("authadmin/register");?>">
  Agregar
</a>
