$(document).ready(function() { 
  
  $("#sortable").sortable(
  {
    axis: 'y', 
    update : function () { 
      var order = $('#sortable').sortable('serialize'); 
      order = "type="+ $('#type').val() + "&" + order;
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
});

