$(document).ready(function() { 
  
    $("a.fancy_link").fancybox({
		'onClosed': function(){window.location.reload();}
	});
});

function saveBasicForm(form, errores_div, row_pre_id, table_id)
{
  $.fancybox.showActivity();
  $.ajax({
      url: $(form).attr('action'),
      data: $(form).serialize(),
      type: 'post',
      dataType: 'json',
      success: function(json){
        if(json.response == "OK")
        {
          
        }
        else
        {
          $('#'+errores_div).html(json.options.content);
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