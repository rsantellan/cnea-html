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
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>
