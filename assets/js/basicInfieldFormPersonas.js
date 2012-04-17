$(document).ready(function() {
   $(":date").dateinput();
   $(".infield_form p label").inFieldLabels();
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