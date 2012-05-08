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
  str = '<div id="especies_'+(counter+1)+'"><p><label for="NombreEspecie_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Nombre de Especie</label><input type="text" value="" name="NombreEspecie_'+(counter+1)+'" id="NombreEspecie_'+(counter+1)+'" class="input_short "></p><div class="float_right"><label style="margin:5px;">USO</label><input type="checkbox" class="input_checkbox" value="uso" name="TipoEspecie_1_'+(counter+1)+'"><label style="margin:5px 5px 5px 15px;">CR&Iacute;A</label><input type="checkbox" class="input_checkbox" value="cria" name="TipoEspecie_1_'+(counter+1)+'"></div><div class="clear"></div><p><label for="ObservacionesEspecie_'+(counter+1)+'" style="position: absolute; left: 0px; top: 15px;" class="infield">Observaciones</label><textarea name="ObservacionesEspecie_'+(counter+1)+'" id="ObservacionesEspecie_'+(counter+1)+'" class=""></textarea></p></div>';
  $('#especies_'+(counter+1)).html(str);
  $(".infield_form p label").inFieldLabels();
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
  str = '<div id="docentes_'+(counter+1)+'"><p><label for="DocenteNombreApellido_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Nombre y Apellido</label><input type="text" value="" name="DocenteNombreApellido_'+(counter+1)+'" id="DocenteNombreApellido_'+(counter+1)+'" class=""></p><p><label for="DocenteProfesion_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Profesi&oacute;n</label><input type="text" value="" name="DocenteProfesion_'+(counter+1)+'" id="DocenteProfesion_'+(counter+1)+'" class=""></p><p><label for="DocenteOcupacion_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Ocupaci&oacute;n</label><input type="text" value="" name="DocenteOcupacion_'+(counter+1)+'" id="DocenteOcupacion_'+(counter+1)+'" class=""></p></div>';
  $('#docentes_'+(counter+1)).html(str);
  $(".infield_form p label").inFieldLabels();
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
  str = '<div id="veterinarios_'+(counter+1)+'"><p><label for="VeterinarioNombreApellido_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Nombre y Apellido</label><input type="text" value="" name="VeterinarioNombreApellido_'+(counter+1)+'" id="VeterinarioNombreApellido_'+(counter+1)+'" class=""></p><p><label for="VeterinarioProfesion_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Profesi&oacute;n</label><input type="text" value="" name="VeterinarioProfesion_'+(counter+1)+'" id="VeterinarioProfesion_'+(counter+1)+'" class=""></p><p><label for="VeterinarioOcupacion_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Ocupaci&oacute;n</label><input type="text" value="" name="VeterinarioOcupacion_'+(counter+1)+'" id="VeterinarioOcupacion_'+(counter+1)+'" class=""></p></div>';
  $('#veterinarios_'+(counter+1)).html(str);
  $(".infield_form p label").inFieldLabels();
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
  str = '<div id="sociedades_'+(counter+1)+'"><p><label for="SociedadNombreApellido_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Nombre y Apellido</label><input type="text" value="" name="SociedadNombreApellido_'+(counter+1)+'" id="SociedadNombreApellido_'+(counter+1)+'" class=""></p><p><label for="SociedadProfesion_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Profesi&oacute;n</label><input type="text" value="" name="SociedadProfesion_'+(counter+1)+'" id="SociedadProfesion_'+(counter+1)+'" class=""></p><p><label for="SociedadOcupacion_'+(counter+1)+'" style="position: absolute; left: 0px; top: 0px;" class="infield">Ocupaci&oacute;n</label><input type="text" value="" name="SociedadOcupacion_'+(counter+1)+'" id="SociedadOcupacion_'+(counter+1)+'" class=""></p></div>';
  $('#sociedades_'+(counter+1)).html(str);
  $(".infield_form p label").inFieldLabels();
}