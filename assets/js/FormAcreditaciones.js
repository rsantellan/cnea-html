var counterCursos = 0;

function agregarFileInputCursos()
{
 var cloned = $("#cursos_upload").clone();
 var ultimo = $('.container_cursos').last();
 var auxId = cloned.attr("id");
 var auxName = cloned.attr("name");
 cloned.attr("id","sacar_"+ counterCursos);
 cloned.attr("id",auxId + "_"+ counterCursos);
 cloned.attr("name",auxName + "_"+ counterCursos);
 var container = $('<div class="container_cursos"></div>');
 container.append(cloned);
 container.append($('<a style="float: right;" onclick="return eliminarFileInput(this);" href="javascript:void(0)">Sacar</a><div class="clear"></div>'));
 container.insertAfter(ultimo);
 $('<div class="clear"></div>').insertAfter(ultimo);
 counterCursos++;
}

function eliminarFileInput(element)
{
  $(element).parent('div').remove();
}

var counterAcreditaciones = 0;

function agregarFileInputAcreditaciones()
{
 var cloned = $("#acreditacion_upload").clone();
 var ultimo = $('.container_acreditaciones').last();
 var auxId = cloned.attr("id");
 var auxName = cloned.attr("name");
 cloned.attr("id","sacar_"+ counterAcreditaciones);
 cloned.attr("id",auxId + "_"+ counterAcreditaciones);
 cloned.attr("name",auxName + "_"+ counterAcreditaciones);
 var container = $('<div class="container_acreditaciones"></div>');
 container.append(cloned);
 container.append($('<a style="float: right;" onclick="return eliminarFileInput(this);" href="javascript:void(0)">Sacar</a><div class="clear"></div>'));
 container.insertAfter(ultimo);
 $('<div class="clear"></div>').insertAfter(ultimo);
 counterAcreditaciones++;
}

var counterCategoria = 0;

function agregarFileInputCategoria()
{
 var cloned = $("#categoria_upload").clone();
 var ultimo = $('.container_categoria').last();
 var auxId = cloned.attr("id");
 var auxName = cloned.attr("name");
 cloned.attr("id","sacar_"+ counterCategoria);
 cloned.attr("id",auxId + "_"+ counterCategoria);
 cloned.attr("name",auxName + "_"+ counterCategoria);
 var container = $('<div class="container_categoria"></div>');
 container.append(cloned);
 container.append($('<a style="float: right;" onclick="return eliminarFileInput(this);" href="javascript:void(0)">Sacar</a><div class="clear"></div>'));
 container.insertAfter(ultimo);
 $('<div class="clear"></div>').insertAfter(ultimo);
 counterCategoria++;
}