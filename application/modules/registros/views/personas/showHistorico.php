<div class="grid_16">
  <h4>Acreditacion Persona <a href="<?php echo site_url("registros/showPersonaListadoHistorico/" . $acreditacionId); ?>">Ver historico</a> </h4>
  <div id="acreditacion_data_<?php echo $acreditacion->getId(); ?>">
	<div class="grid_5">
      <span>
        <label>Estado</label>
        <?php echo $estados[$acreditacion->getEstado()]; ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Fecha de solicitud</label>
        <?php echo $acreditacion->getFecha(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Nombre</label>
        <?php echo $acreditacion->getNombre(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Apellido</label>
        <?php echo $acreditacion->getNombreapellido(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Formacion</label>
        <?php echo $acreditacion->getFormacion(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Titulo</label>
        <?php echo $acreditacion->getTitulo(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Documento</label>
        <?php echo $acreditacion->getDocumento(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Fecha nacimiento</label>
        <?php echo $acreditacion->getFechanacimiento(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Direccion Postal</label>
        <?php echo $acreditacion->getDireccionpostal(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Direccion Electronica</label>
        <?php echo $acreditacion->getDireccionelectronica(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Telefono Contacto</label>
        <?php echo $acreditacion->getTelefonocontacto(); ?>
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
        <?php echo $acreditacion->getLaboratoriounidad(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Cargo/Funcion en la institucion</label>
        <?php echo $acreditacion->getCargofuncioninstitucion(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Carga Horaria Semanal</label>
        <?php echo $acreditacion->getCargahorariasemanal(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Nombre supervisor</label>
        <?php echo $acreditacion->getNombresupervisor(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Especies que trabajadas</label>
        <?php echo $acreditacion->getEspeciestrabajadas(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Describa las tareas</label>
        <?php echo $acreditacion->getDescribatareas(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Categorias</label>
        <?php 
          $catIndex = 0;
          if($acreditacion->getCategoriaA() == 1)
          {
            echo "A";
            $catIndex++;
          }
          if($acreditacion->getCategoriaB() == 1)
          {
            if($catIndex > 0) echo ", ";
            echo "B";
            $catIndex++;
          }
          if($acreditacion->getCategoriaC1() == 1)
          {
            if($catIndex > 0) echo ", ";
            echo "C1";
            $catIndex++;
          }
          if($acreditacion->getCategoriaC2() == 1)
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
        <?php echo $acreditacion->getFechavencimiento(); ?>
      </span>
    </div>
    <div class="clear"></div>
    <!-- Cursos -->
    <hr/>
    <div class="grid_5">
      <span>
        <label>Realizo Cursos</label>
        <?php echo ($acreditacion->getRealizocursos() == 1)? "Si" : "No"; ?>
      </span>
    </div>
	
	<?php 
	if($acreditacion->getRealizocursos() == 1): ?>
	<div class="grid_5">
      <span>
        <label>Curso 1</label>
        <?php echo $acreditacion->getCurso1() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Curso 2</label>
        <?php echo $acreditacion->getCurso2() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Curso 3</label>
        <?php echo $acreditacion->getCurso3() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Curso observaciones</label>
        <?php echo $acreditacion->getCursoobservacion() ?>
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
              <a href="<?php echo site_url("registros/downloadArchivoAcreditacionHistorico/".$archivo->id);?>">Descargar</a>
            </td>
          </tr>
            <?php 
              endif;
            endforeach;
            ?>
        </tbody>
      </table>
      <div class="clear"></div>
    </div>
    <hr/>
	<?php endif; ?>
	<div class="clear"></div>
	<hr/>
    <!-- Acreditaciones -->
    <div class="grid_5">
      <span>
        <label>Acreditaciones Personales</label>
        <?php echo ($acreditacion->getAcrpersonales() == 1)? "Si" : "No"; ?>
      </span>
    </div>
	<?php 
	if($acreditacion->getAcrpersonales() == 1): ?>
	<div class="grid_7">
      <span>
        <label>Organismo / Institución que la expidió:</label>
        <?php echo $acreditacion->getAcrorganismo() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Categoría adjudicada:</label>
        <?php echo $acreditacion->getAcrcategoria() ?>
      </span>
    </div>
	<div class="grid_5">
      <span>
        <label>Fecha de vencimiento:</label>
        <?php echo $acreditacion->getAcrfecha() ?>
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
              <a href="<?php echo site_url("registros/downloadArchivoAcreditacionHistorico/".$archivo->id);?>">Descargar</a>
            </td>
          </tr>
            <?php 
              endif;
            endforeach;
            ?>
        </tbody>
      </table>
      <div class="clear"></div>
    </div>
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
              <a href="<?php echo site_url("registros/downloadArchivoAcreditacionHistorico/".$archivo->id);?>">Descargar</a>
            </td>
          </tr>
            <?php 
              endif;
            endforeach;
            ?>
        </tbody>
      </table>
      <div class="clear"></div>
    </div>
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
              <a href="<?php echo site_url("registros/downloadArchivoAcreditacionHistorico/".$archivo->id);?>">Descargar</a>
            </td>
          </tr>
            <?php 
              endif;
            endforeach;
            ?>
        </tbody>
      </table>
      <div class="clear"></div>
    </div>
  <hr/>
</div>
<div class="clear"></div>
