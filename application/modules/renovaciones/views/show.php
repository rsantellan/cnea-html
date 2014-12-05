<div class="grid_16">
  <h4>Renovación Persona<!--  <a href="<?php echo site_url("registros/showPersonaListadoHistorico/" . $renovacion->getId()); ?>">Ver historico</a>--></h4>
  <div id="acreditacion_data_<?php echo $renovacion->getId(); ?>">
	<div class="grid_5">
      <span>
        <label>Estado</label>
        <?php echo $estados[$renovacion->getEstado()]; ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Fecha de solicitud</label>
        <?php echo $renovacion->getFecha(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Nombre</label>
        <?php echo $renovacion->getNombre(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Apellido</label>
        <?php echo $renovacion->getNombreapellido(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Formacion</label>
        <?php echo $renovacion->getFormacion(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Titulo</label>
        <?php echo $renovacion->getTitulo(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Documento</label>
        <?php echo $renovacion->getDocumento(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Fecha nacimiento</label>
        <?php echo $renovacion->getFechanacimiento(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Direccion Postal</label>
        <?php echo $renovacion->getDireccionpostal(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Direccion Electronica</label>
        <?php echo $renovacion->getDireccionelectronica(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Telefono Contacto</label>
        <?php echo $renovacion->getTelefonocontacto(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Institución en la que se desempeña:</label>
        <?php echo $institucion->getNombreinsititucion(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Laboratorio/Unidad</label>
        <?php echo $renovacion->getLaboratoriounidad(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Cargo/Funcion en la institucion</label>
        <?php echo $renovacion->getCargofuncioninstitucion(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Carga Horaria Semanal</label>
        <?php echo $renovacion->getCargahorariasemanal(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Nombre supervisor</label>
        <?php echo $renovacion->getNombresupervisor(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Especies que trabajadas</label>
        <?php echo $renovacion->getEspeciestrabajadas(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Describa las tareas</label>
        <?php echo $renovacion->getDescribatareas(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Categorias</label>
        <?php 
          $catIndex = 0;
          if($renovacion->getCategoriaA() == 1)
          {
            echo "A";
            $catIndex++;
          }
          if($renovacion->getCategoriaB() == 1)
          {
            if($catIndex > 0) echo ", ";
            echo "B";
            $catIndex++;
          }
          if($renovacion->getCategoriaC1() == 1)
          {
            if($catIndex > 0) echo ", ";
            echo "C1";
            $catIndex++;
          }
          if($renovacion->getCategoriaC2() == 1)
          {
            if($catIndex > 0) echo ", ";
            echo "C2";
            $catIndex++;
          }
        ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Fecha de Vencimiento</label>
        <?php echo $renovacion->getFechavencimiento(); ?>
      </span>
    </div>
    <div class="clear"></div>
    <a href="<?php echo site_url("registros/editarPersona/".$renovacion->getId());?>">Editar</a>
    <div class="clear"></div>
    <!-- Cursos -->
    <hr/>
    <div class="grid_5">
      <span>
        <label>Realizo Cursos</label>
        <?php echo ($renovacion->getRealizocursos() == 1)? "Si" : "No"; ?>
      </span>
    </div>
	
	<?php 
	if($renovacion->getRealizocursos() == 1): ?>
	<div class="grid_5">
      <span>
        <label>Curso 1</label>
        <?php echo $renovacion->getCurso1() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Curso 2</label>
        <?php echo $renovacion->getCurso2() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Curso 3</label>
        <?php echo $renovacion->getCurso3() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Curso observaciones</label>
        <?php echo $renovacion->getCursoobservacion() ?>
      </span>
    </div>
    
    <div class="grid_14">
      <h4>Archivos de los cursos</h4>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($archivos as $archivo):
              if($archivo->type == "curso"):
            ?>  
          <tr id="archivo_<?php echo $archivo->id;?>">
            <td><?php echo $archivo->filename; ?></td>
            <td>
              <a href="<?php echo site_url("registros/downloadArchivoAcreditacion/".$archivo->id);?>">Descargar</a>
              <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $archivo->id?>, 'archivo_<?php echo $archivo->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeArchivoAcreditacion");?>')">Borrar</a>
            </td>
          </tr>
            <?php 
              endif;
            endforeach;
            ?>
        </tbody>
      </table>
      <div class="clear"></div>
      <div id="add_archivo_curso_form" style="<?php if(!isset($errores) && !isset($errores['archivo_cursos'])):?>display:none<?php endif;?>">
        <div class="grid_14">
          <span>
            <label>Adjuntar programas con la carga horaria total y certificados de aprobación de dichos cursos.</label>
            <form action="<?php echo site_url('registros/acreditacionesSubirArchivo'); ?>" method="POST" enctype="multipart/form-data">
              <input type="file" name="archivo" size="20" />
              <input type="submit" value="upload" />
              <input type="hidden" value="<?php echo $renovacion->getId();?>" name="id"/>
              <input type="hidden" value="curso" name="type"/>
            </form>
          </span>
        </div>
      </div>
    </div>
    <?php if(isset($errores) && isset($errores['archivo_cursos'])):?>
    
    <div class="clear"></div>
    <div class="grid_5">
      <div class="error">
        <?php echo $errores['archivo_cursos'];?>
      </div>
    </div>  
    <?php endif; ?>

    <div class="clear"></div>
    <a href="javascript:void(0)" onclick="$('#add_archivo_curso_form').slideToggle('slow');">Agregar</a>
    <hr/>
	<?php endif; ?>
	<div class="clear"></div>
	<hr/>
    <!-- Acreditaciones -->
    <div class="grid_5">
      <span>
        <label>Acreditaciones Personales</label>
        <?php echo ($renovacion->getAcrpersonales() == 1)? "Si" : "No"; ?>
      </span>
    </div>
	<?php 
	if($renovacion->getAcrpersonales() == 1): ?>
	<div class="grid_7">
      <span>
        <label>Organismo / Institución que la expidió:</label>
        <?php echo $renovacion->getAcrorganismo() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Categoría adjudicada:</label>
        <?php echo $renovacion->getAcrcategoria() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Fecha de vencimiento:</label>
        <?php echo $renovacion->getAcrfecha() ?>
      </span>
    </div>
    <div class="grid_14">
      <h4>Archivos de las acreditaciones</h4>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($archivos as $archivo):
              if($archivo->type == "acreditacion"):
                
            ?>  
          <tr id="archivo_<?php echo $archivo->id;?>">
            <td><?php echo $archivo->filename; ?></td>
            <td>
              <a href="<?php echo site_url("registros/downloadArchivoAcreditacion/".$archivo->id);?>">Descargar</a>
              <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $archivo->id?>, 'archivo_<?php echo $archivo->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeArchivoAcreditacion");?>')">Borrar</a>
            </td>
          </tr>
            <?php 
              endif;
            endforeach;
            ?>
        </tbody>
      </table>
      <div class="clear"></div>
      <div id="add_archivo_acreditaciones_form" style="<?php if(!isset($errores) && !isset($errores['archivo_acreditacion'])):?>display:none<?php endif;?>">
        <div class="grid_14">
          <span>
            <label>adjuntar certificado correspondiente</label>
            <form action="<?php echo site_url('registros/acreditacionesSubirArchivo'); ?>" method="POST" enctype="multipart/form-data">
              <input type="file" name="archivo" size="20" />
              <input type="submit" value="upload" />
              <input type="hidden" value="<?php echo $renovacion->getId();?>" name="id"/>
              <input type="hidden" value="acreditacion" name="type"/>
            </form>
          </span>
        </div>
      </div>
    </div>
    <?php if(isset($errores) && isset($errores['archivo_acreditacion'])):?>
    
    <div class="clear"></div>
    <div class="grid_5">
      <div class="error">
        <?php echo $errores['archivo_acreditacion'];?>
      </div>
    </div>  
    <?php endif; ?>

    <div class="clear"></div>
    <a href="javascript:void(0)" onclick="$('#add_archivo_acreditaciones_form').slideToggle('slow');">Agregar</a>
    <hr/>
	
	<?php endif; ?>
    
    
    
  </div>
  
  <div class="clear"></div>
  
  <div class="grid_14">
      <h4>Adjuntos de la categoria</h4>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($archivos as $archivo):
              if($archivo->type == "categoria"):
                
            ?>  
          <tr id="archivo_<?php echo $archivo->id;?>">
            <td><?php echo $archivo->filename; ?></td>
            <td>
              <a href="<?php echo site_url("registros/downloadArchivoAcreditacion/".$archivo->id);?>">Descargar</a>
              <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $archivo->id?>, 'archivo_<?php echo $archivo->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeArchivoAcreditacion");?>')">Borrar</a>
            </td>
          </tr>
            <?php 
              endif;
            endforeach;
            ?>
        </tbody>
      </table>
      <div class="clear"></div>
      <div id="add_archivo_categoria_form" style="<?php if(!isset($errores) && !isset($errores['archivo_categoria'])):?>display:none<?php endif;?>">
        <div class="grid_14">
          <span>
            <label>Subir archivo</label>
            <form action="<?php echo site_url('registros/acreditacionesSubirArchivo'); ?>" method="POST" enctype="multipart/form-data">
              <input type="file" name="archivo" size="20" />
              <input type="submit" value="upload" />
              <input type="hidden" value="<?php echo $renovacion->getId();?>" name="id"/>
              <input type="hidden" value="categoria" name="type"/>
            </form>
          </span>
        </div>
      </div>
    </div>
    <?php if(isset($errores) && isset($errores['archivo_categoria'])):?>
    
    <div class="clear"></div>
    <div class="grid_5">
      <div class="error">
        <?php echo $errores['archivo_categoria'];?>
      </div>
    </div>  
    <?php endif; ?>

    <div class="clear"></div>
    <a href="javascript:void(0)" onclick="$('#add_archivo_categoria_form').slideToggle('slow');">Agregar</a>
    <hr/>
  
	
  <div class="clear"></div>
  
  <div class="grid_14">
      <h4>Firma de la institucion</h4>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($archivos as $archivo):
              if($archivo->type == "firmainstitucion"):
                
            ?>  
          <tr id="archivo_<?php echo $archivo->id;?>">
            <td><?php echo $archivo->filename; ?></td>
            <td>
              <a href="<?php echo site_url("registros/downloadArchivoAcreditacion/".$archivo->id);?>">Descargar</a>
              <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $archivo->id?>, 'archivo_<?php echo $archivo->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeArchivoAcreditacion");?>')">Borrar</a>
            </td>
          </tr>
            <?php 
              endif;
            endforeach;
            ?>
        </tbody>
      </table>
      <div class="clear"></div>
      <div id="add_archivo_instituciones_form" style="<?php if(!isset($errores) && !isset($errores['archivo_acreditacion'])):?>display:none<?php endif;?>">
        <div class="grid_14">
          <span>
            <label>adjuntar certificado correspondiente</label>
            <form action="<?php echo site_url('registros/acreditacionesSubirArchivo'); ?>" method="POST" enctype="multipart/form-data">
              <input type="file" name="archivo" size="20" />
              <input type="submit" value="upload" />
              <input type="hidden" value="<?php echo $renovacion->getId();?>" name="id"/>
              <input type="hidden" value="firmainstitucion" name="type"/>
            </form>
          </span>
        </div>
      </div>
    </div>
    <?php if(isset($errores) && isset($errores['archivo_firmainstitucion'])):?>
    
    <div class="clear"></div>
    <div class="grid_5">
      <div class="error">
        <?php echo $errores['archivo_firmainstitucion'];?>
      </div>
    </div>  
    <?php endif; ?>

    <div class="clear"></div>
    <a href="javascript:void(0)" onclick="$('#add_archivo_instituciones_form').slideToggle('slow');">Agregar</a>
    <hr/>
  
  <?php //var_dump($renovacion); ?>
  <hr/>
  <?php //var_dump($institucion); ?>
  
</div>
<div class="clear"></div>
<a href="<?php echo site_url("registros/index");?>">
  Volver
</a>
