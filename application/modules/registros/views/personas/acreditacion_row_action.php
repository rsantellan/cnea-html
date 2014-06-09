<ul>
  <li>
    <a href="<?php echo site_url("registros/showPersona/" . $id); ?>">
      Mostrar
    </a>
  </li>
  <li>
    <a class="changeStateLink" href="<?php echo site_url("registros/cambiarEstado/" . $id); ?>">
      Cambiar Estado
    </a>
  </li>
  <li>
    <a href="<?php echo site_url("registros/fullDeletePersona/" . $id); ?>" onclick="return confirm('Esta seguro de querer eliminar el registro?');">
      Eliminar
    </a>
  </li>
</ul>