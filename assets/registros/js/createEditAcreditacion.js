$(document).ready(function() {
    if($('#formacionterciaria').is(':checked'))
    {
      showTitulo();
    }
  
});

function showTitulo(){
  $('#titulo_container').removeClass('hidden');
}

function hideTitulo(){
  $('#titulo').val('');
  $('#titulo_container').addClass('hidden');
}