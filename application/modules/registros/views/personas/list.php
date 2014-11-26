<h4>Listado de personas registradas</h4>
<table id="table_data">
  <thead>
    <tr>
      <?php foreach($headers as $h): ?>
	  <th>
        <?php echo $h;?>
      </th>
	  <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach($list as $registro): ?>
      <?php echo $this->load->view('registros/personas/acreditacion_row', array('registro' => $registro));?>
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
        "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 4, 6 ] }
        ],
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "<?php echo site_url($url);?>",
        "fnDrawCallback": function( oSettings ) {
            //alert( 'DataTables has redrawn the table' );
            $('a.changeStateLink').fancybox();
        },
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

function doChangeFormState(form){
    $.fancybox.showActivity();
    $.ajax({
          url: $(form).attr('action'),
          data: $(form).serialize(),
          type: 'post',
          dataType: 'json',
          success: function(json){
              if(json.response == "OK")
              {
                $('#messagescontainer').html(json.message);
              }
          }, 
          complete: function()
          {
            $.fancybox.hideActivity();
            $.fancybox.resize();
          }
      });
      return false;      
}
</script>

