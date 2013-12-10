<h4>Listado de instituciones registradas</h4>
<table id="table_data">
  <thead>
    <tr>
      <th>
        Estado
      </th>
      <th>
        Orden
      </th>
      <th>
        Nombre
      </th>
	  <th>
        Naturaleza
      </th>
	  <th>
        Nombre del contacto
      </th>
      <th>
        Mail del contacto
      </th>
      <th>
        Acciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($list as $registro): ?>
    <tr id="registro_row_<?php echo $registro->id;?>">
      <td>
        <?php echo ($registro->isactive == 1)? "Activo" : "Desactivado"; ?>
      </td>
      <td>
          <?php echo $registro->ordinal; ?>
      </td>
      <td>
        <?php echo ($registro->nombreinsititucion); ?>
      </td>
	  <td>
        <?php echo ($registro->naturaleza); ?>
      </td>
	  <td>
        <?php echo ($registro->nombrecontacto); ?>
      </td>
      <td>
        <?php echo ($registro->mailcontacto); ?>
      </td>
      <td>
        <a href="<?php echo site_url("registros/showInstitucion/".$registro->id);?>">
          Mostrar
        </a>
        <a href="<?php echo site_url("registros/actInstitucion/".$registro->id."/".$registro->isactive);?>">
          <?php echo ($registro->isactive == 1)? "Desactivar" : "Activar"; ?>
        </a>
        <a href="<?php echo site_url("registros/dodeleteinstitucion/".$registro->id);?>" onclick="return confirm('Esta seguro de querer eliminar el registro?');">
          Eliminar
        </a>
      </td>
    </tr>
      
    <?php endforeach; ?>
  </tbody>
</table>

<div class="clear"></div>

<a href="<?php echo site_url("registros/createinstitucion");?>">
  Agregar
</a>

<a class="fancy_link iframe" href="<?php echo site_url("registros/sortInstituciones");?>" >
  Ordenar
</a>



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