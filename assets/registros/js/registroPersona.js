$(document).ready(function() { 
  $(function() {
		
		$( "#institucion" ).autocomplete({
			source: lcValues,  
            appendTo: '#autocomplete_container',  
            open: function() { $('#autocomplete_container .ui-menu').width(300) }  
		});
	});
  
});

