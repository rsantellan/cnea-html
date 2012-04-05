function addActaTag(actaId, tagId, myUrl)
{
  $.ajax({
    url: myUrl,
    data: {actaId: actaId, tagId: tagId},
    type: 'post',
    dataType: 'json',
    complete: function(json)
    {
      var obj = jQuery.parseJSON(json.responseText);
      if(obj.response == "OK")
      {
        $("#object_tags_container").replaceWith(obj.body);
      }
    }        
  });
}

function removeActaTag(actaId, tagId, myUrl)
{
  $.ajax({
    url: myUrl,
    data: {actaId: actaId, tagId: tagId},
    type: 'post',
    dataType: 'json',
    complete: function(json)
    {
      var obj = jQuery.parseJSON(json.responseText);
      if(obj.response == "OK")
      {
        $("#object_tags_container").replaceWith(obj.body);
      }
    }        
  });
}

function refreshActasTags()
{
  
}