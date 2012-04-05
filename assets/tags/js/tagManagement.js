function addTag(myUrl)
{
  $.ajax({
    url: myUrl,
    dataType: 'json',
    complete: function(json)
    {
      var obj = jQuery.parseJSON(json.responseText);
      if(obj.response == "OK")
      {
        $("#tags_auxiliary_container").html(obj.body);
        $("#tags_auxiliary_container").show();
        $("#tags_table_container").hide();
        $.fancybox.resize();
      }
    }        
  });
}

function saveTagForm(form)
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
          $("#table_container_tags").html(json.table);
          $("#tags_auxiliary_container").hide();
          $("#tags_table_container").show();
          refreshTags();
        }
        else
        {
          $("#tags_auxiliary_container").html(json.body);
        }
      }
      , 
      complete: function()
      {
          $.fancybox.hideActivity();
          $.fancybox.resize();
      }
  });
  return false;  
}

function deleteTag(itemId, text, mUrl)
{
  if(confirm(text))
  {
    $.ajax({
      url: mUrl,
      data: {id: itemId},
      type: 'post',
      dataType: 'json',
      complete: function(json)
      {
        var obj = jQuery.parseJSON(json.responseText);
        if(obj.response == "OK")
        {
          $('#tag_table_' + itemId).fadeOut(500, function() { $(this).remove(); });
          refreshTags();
        }
      }        
    });
  }
}

function refreshTags()
{
  var mUrl = $("#refresh_tags_object").val();
  $.ajax({
      url: mUrl,
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