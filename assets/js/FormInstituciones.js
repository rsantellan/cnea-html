function agregarEscpecie(){
  elements = document.getElementsByTagName('div');
  counter = 0;
  for(var i = 0; i<elements.length; i++){
      e = elements[i];
      if(e.id.indexOf('especies_')!=-1){
          e = e.id.split('_');
          counter = parseInt(e[1]);
      }
  }
  
  $('#especies').append('<div id="especies_'+(counter+1)+'"></div>');
  //str = $('#especies_'+(counter)).html();
  //str = str.replace('_'+counter, '_'+(counter+1));
  //cambiar esta chanchada :S
  str = '<div id="especies_'+(counter+1)+'"><input type="text" name="NombreEspecie_'+(counter+1)+'" class="input_short" value="Nombre de Especie" /><div class="float_right"><label style="margin:5px;">USO</label><input type="radio" class="radiobuttom" name="TipoEspecie_'+(counter+1)+'" value="uso" checked="checked" /><label style="margin:5px 5px 5px 15px;">CR&Iacute;A</label><input type="radio" class="radiobuttom" name="TipoEspecie_'+(counter+1)+'" value="cria" /></div><div class="clear"></div><textarea name="ObservacionesEspecie_'+(counter+1)+'">Observaciones</textarea></div>';
  $('#especies_'+(counter+1)).html(str);
}

function agregarDoncente(){
  elements = document.getElementsByTagName('div');
  counter = 0;
  for(var i = 0; i<elements.length; i++){
      e = elements[i];
      if(e.id.indexOf('docentes_')!=-1){
          e = e.id.split('_');
          counter = parseInt(e[1]);
      }
  }
  
  $('#docentes').append('<div id="docentes_'+(counter+1)+'"></div>');
  //str = $('#comite_'+(counter)).html();
  //str = str.replace('_'+counter, '_'+(counter+1));
  //cambiar esta chanchada :S
  str = '<div id="docentes_'+(counter+1)+'"><input type="text" name="DocenteNombreApellido_'+(counter+1)+'" value="Nombre y Apellido" class="input_comite_name" /><input type="text" name="DocenteProfesion_'+(counter+1)+'" value="Profesi&oacute;n" class="input_comite_short" /><input type="text" name="DocenteOcupacion_'+(counter+1)+'" value="Ocupaci&oacute;n" class="input_comite_short" /></div><div class="clear"></div>';
  $('#docentes_'+(counter+1)).html(str);
}

function agregarVeterinario(){
  elements = document.getElementsByTagName('div');
  counter = 0;
  for(var i = 0; i<elements.length; i++){
      e = elements[i];
      if(e.id.indexOf('veterinarios_')!=-1){
          e = e.id.split('_');
          counter = parseInt(e[1]);
      }
  }
  
  $('#veterinarios').append('<div id="veterinarios_'+(counter+1)+'"></div>');
  //str = $('#comite_'+(counter)).html();
  //str = str.replace('_'+counter, '_'+(counter+1));
  //cambiar esta chanchada :S
  str = '<div id="veterinarios_'+(counter+1)+'"><input type="text" name="VeterinarioNombreApellido_'+(counter+1)+'" value="Nombre y Apellido" class="input_comite_name" /><input type="text" name="VeterinarioProfesion_'+(counter+1)+'" value="Profesi&oacute;n" class="input_comite_short" /><input type="text" name="VeterinarioOcupacion_'+(counter+1)+'" value="Ocupaci&oacute;n" class="input_comite_short" /></div><div class="clear"></div>';
  $('#veterinarios_'+(counter+1)).html(str);
}

function agregarSociedad(){
  elements = document.getElementsByTagName('div');
  counter = 0;
  for(var i = 0; i<elements.length; i++){
      e = elements[i];
      if(e.id.indexOf('sociedades_')!=-1){
          e = e.id.split('_');
          counter = parseInt(e[1]);
      }
  }
  
  $('#sociedades').append('<div id="sociedades_'+(counter+1)+'"></div>');
  //str = $('#comite_'+(counter)).html();
  //str = str.replace('_'+counter, '_'+(counter+1));
  //cambiar esta chanchada :S
  str = '<div id="sociedades_'+(counter+1)+'"><input type="text" name="SociedadNombreApellido_'+(counter+1)+'" value="Nombre y Apellido" class="input_comite_name" /><input type="text" name="SociedadProfesion_'+(counter+1)+'" value="Profesi&oacute;n" class="input_comite_short" /><input type="text" name="SociedadOcupacion_'+(counter+1)+'" value="Ocupaci&oacute;n" class="input_comite_short" /></div><div class="clear"></div>';
  $('#sociedades_'+(counter+1)).html(str);
}