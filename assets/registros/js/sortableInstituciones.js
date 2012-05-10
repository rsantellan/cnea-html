$(document).ready(function() { 
  /*
  
  */
});

function traerPersonasInstitucion()
{
  parent.$.fancybox.showActivity();
  $.ajax({
    url: $('#bring_ajax').val(),
    data: {'name' : $('#instituciones').val()},
    type: 'post',
    dataType: 'json',
    success: function(json)
    {
      console.log(json);
      if(json.response == "OK")
      {
        $("#sortable_holder").html(json.html);
        startAccordion();
      }
    },
    complete: function()
    {
      
      
        parent.$.fancybox.hideActivity();
        parent.$.fancybox.resize();
    }        
  });
}

function startAccordion()
{
  $("#sortable").sortable(
  {
    axis: 'y', 
    update : function () { 
      var order = $('#sortable').sortable('serialize'); 
      parent.$.fancybox.showActivity();
      $.ajax({
        url: $('#sort_ajax').val(),
        data: order,
        type: 'post',
        dataType: 'json',
        complete: function()
        {
            parent.$.fancybox.hideActivity();
            parent.$.fancybox.resize();
        }        
      });
      
    }
  });
}