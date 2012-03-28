$(document).ready(function() { 
  hoversImages();
  
});

function hoversImages()
{
  $('.img_thumb_container').each(function(index, value) {
    
    $(this).hover(function(){
      $(this).find('div.img_edit').show();
    },
    function(){
      $(this).find('div.img_edit').hide();
    });
  });
}

function deleteFile(mUrl, itemId)
{
  $.ajax({
    url: mUrl,
    type: 'post',
    dataType: 'json',
    complete: function(json)
    {
      var obj = jQuery.parseJSON(json.responseText);
      if(obj.response == "OK")
      {
        $('#file_container_' + itemId).fadeOut(500, function() { $(this).remove(); });
      }
    }        
  });
}