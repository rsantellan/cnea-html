$(document).ready(function() {
   //$(":date").dateinput();
   $('#fecha').datepicker({
      changeYear: true,
      yearRange: "-100:+0"
    });
   $('#fechanacimiento').datepicker({
      changeYear: true,
      yearRange: "-100:+0"
    }); 
    
    $('#acrfecha').datepicker({
      changeYear: true,
      yearRange: "-100:+0"
    });
   $("#acreditacion_form").sayt();
   $(".infield_form p label.hasinfieldlabel").inFieldLabels();
   /*
   $('.button_short').each(function(index, val){
      $(this).bind('click', function() {
        $(this).prev().trigger('click');
      });
    });
   $('.adjuntar').each(function(index, val){
      $(this).bind('click', function() {
        $(this).prev().trigger('click');
        return false;
      });
    });
    */
	if($('input[name=realizocursos]:checked').val() == 1)
	{
	  $(".realizacion_field").each(function(index, value) {
		$(this).show();
	  });
	}
	else
	{
	  $(".realizacion_field").each(function(index, value) {
		$(this).hide();
	  });
	}
	if($('input[name=acrpersonales]:checked').val() == 1)
	{
	  $(".acreditacion_field").each(function(index, value) {
		$(this).show();
	  });
	}
	else
	{
	  $(".acreditacion_field").each(function(index, value) {
		$(this).hide();
	  });
	}
	
 });



function hideShowRealizacion(element)
{
  //console.log($(element).val());
  $(".realizacion_field").each(function(index, value) {
	$(this).toggle();
    //console.log('div' + index + ':' + $(this).attr('id'));
  });
}

function hideShowAcreditacion(element)
{
  //console.log($(element).val());
  $(".acreditacion_field").each(function(index, value) {
	$(this).toggle();
    //console.log('div' + index + ':' + $(this).attr('id'));
  });
}
