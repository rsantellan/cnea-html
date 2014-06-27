<tr id="registro_row_<?php echo $registro->id; ?>">
  <td>
    <?php
    echo $estados[$registro->estado];
    ?>
  </td>
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
    <?php
    $catIndex = 0;
    if ($registro->categoriaA == 1) {
      echo "A";
      $catIndex++;
    }
    if ($registro->categoriaB == 1) {
      if ($catIndex > 0)
        echo ", ";
      echo "B";
      $catIndex++;
    }
    if ($registro->categoriaC1 == 1) {
      if ($catIndex > 0)
        echo ", ";
      echo "C1";
      $catIndex++;
    }
    if ($registro->categoriaC2 == 1) {
      if ($catIndex > 0)
        echo ", ";
      echo "C2";
      $catIndex++;
    }
    ?>
  </td>
  <td>
    <?php echo ($registro->fecha); ?>
  </td>
  <td>
    <?php echo ($registro->fechavencimiento); ?>
  </td>
  <td>
    <ul>
      <li>
        <a href="<?php echo site_url("registros/showPersona/" . $registro->id); ?>">
          Mostrar
        </a>
      </li>
      <li>
        <a class="changeStateLink" href="<?php echo site_url("registros/cambiarEstado/" . $registro->id); ?>">
          Cambiar Estado
        </a>
      </li>
      <li>
        <a href="<?php echo site_url("registros/fullDeletePersona/" . $registro->id); ?>" onclick="return confirm('Esta seguro de querer eliminar el registro?');">
          Eliminar
        </a>
      </li>
    </ul>
  </td>
</tr>