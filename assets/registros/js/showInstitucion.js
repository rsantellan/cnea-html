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
          
          if(json.options.is_new == 'true' || json.options.is_new == true)
          {
            $("#"+table_id).append(json.options.content);
          }
          else
          {
            $("#"+row_pre_id+json.options.id).replaceWith(json.options.content);
          }
          $.fancybox.close();
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