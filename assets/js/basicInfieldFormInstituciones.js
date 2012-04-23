$(document).ready(function() {
   $(".infield_form p label").inFieldLabels();
   $('.adjuntar').each(function(index, val){
      $(this).bind('click', function() {
        $(this).prev().trigger('click');
        return false;
      });
    });
 });