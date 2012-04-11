$(document).ready(function() {
   $(":date").dateinput();
   $(".infield_form p label").inFieldLabels();
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