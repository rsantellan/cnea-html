<h4>Listado de personas registradas</h4>
<table id="table_data">
  <thead>
    <tr>
      <th>
        Estado
      </th>
      <th>
        Nombre Persona
      </th>
	  <th>
        Nombre Institucion
      </th>
	  <th>
        Email
      </th>
      <th>
        Categoria
      </th>
      <th>
        Fecha de vencimiento
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($list as $registro): ?>
    <?php //var_dump($registro);?>
    <tr id="registro_row_<?php echo $registro->id;?>">
      <td>
        <?php echo ($registro->isactive == 1)? "Activo" : "Desactivado"; ?>
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
        <?php echo ($registro->categoria); ?>
      </td>
      <td>
        <?php echo ($registro->fechavencimiento); ?>
      </td>
      <td>
        <a href="<?php echo site_url("registros/showPersona/".$registro->id);?>">
          Mostrar
        </a>
        <a href="<?php echo site_url("registros/actPersona/".$registro->id."/".$registro->isactive);?>">
          <?php echo ($registro->isactive == 1)? "Desactivar" : "Activar"; ?>
        </a>
        <a href="<?php echo site_url("registros/fullDeletePersona/".$registro->id);?>" onclick="return confirm('Esta seguro de querer eliminar el registro?');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>

<div class="clear"></div>

<a href="<?php echo site_url("registros/createacreditacion");?>">
  Agregar
</a>
<!--
<a class="fancy_link iframe" href="<?php echo site_url("registros/sortPersonas");?>" >
  Ordenar Instituciones
</a>
<a class="fancy_link iframe" href="<?php echo site_url("registros/sortPersonasEnInstituciones");?>" >
  Ordenar Personas
</a>
-->

<script type="text/javascript">
  
$(document).ready(function(){
    $('#table_data').dataTable({
        "aaSorting": [[ 1, "desc" ]],
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