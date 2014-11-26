<h4>Listado del historico</h4>
<table id="table_data">
  <thead>
    <tr>
      <th>
        Nombre
      </th>
      <th>
        Apellido
      </th>
      <th>
        Fecha respaldo
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($listado as $registro): ?>
    <tr id="registro_row_<?php echo $registro->id;?>">
      <td>
          <?php echo $registro->nombre; ?>
      </td>
      <td>
        <?php echo ($registro->nombreapellido); ?>
      </td>
	  <td>
        <?php echo ($registro->created_at); ?>
      </td>
      <td>
        <a href="<?php echo site_url("registros/showPersonaHistorico/".$registro->id."/".$acreditacionId);?>">
          Mostrar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>

<div class="clear"></div>

<a href="<?php echo site_url("registros/showPersona/" . $acreditacionId); ?>">
      Volver al actual
</a>
<script type="text/javascript">
$(document).ready(function(){
    $('#table_data').dataTable({
        "bSort": false,
        "oLanguage" : {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
});
</script>
