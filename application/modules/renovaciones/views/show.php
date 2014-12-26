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
        <?php echo $renovacion->getFechasolicitud(true); ?>
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
        <?php echo $renovacion->getApellido(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Documento</label>
        <?php echo $renovacion->getCi(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Direccion Electronica</label>
        <?php echo $renovacion->getEmail(); ?>
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
        <?php echo $renovacion->getLaboratorio(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Cargo/Funcion en la institucion</label>
        <?php echo $renovacion->getCargo(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Carga Horaria Semanal</label>
        <?php echo $renovacion->getCargahoraria(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Nombre supervisor</label>
        <?php echo $renovacion->getJefe(); ?>
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
        <label>Fecha de acreditacion</label>
        <?php echo $renovacion->getFechaacreditacion(true); ?>
      </span>
    </div>
    
    <div class="grid_5">
      <span>
        <label>Numero de registro</label>
        <?php echo $renovacion->getNumregistro(); ?>
      </span>
    </div>
    
    
    <div class="clear"></div>
    <a href="<?php echo site_url("renovaciones/edit/".$renovacion->getId());?>">Editar</a>
    <div class="clear"></div>
    <!-- Cursos -->
    <hr/>
    
    <div class="grid_14">
        <h4>Jornadas de actualización sobre temáticas de animales de experimentación</h4>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Lugar</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($eventos as $evento): ?>
                <tr>
                    <td><?php echo $evento->name;?></td>
                    <td><?php echo $evento->fecha;?></td>
                    <td><?php echo $evento->lugar;?></td>
                    <td>Eliminar/<?php echo $evento->id;?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    
    <div class="grid_14">
        <h4>Título/s de los protocolos de experimentación animal</h4>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($titulos as $titulo): ?>
                <tr>
                    <td><?php echo $titulo->name;?></td>
                    <td><?php echo $titulo->description;?></td>
                    <td>Eliminar/<?php echo $titulo->id;?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
	
    <div class="grid_14">
        <h4>Protocolos de experimentación de investigación</h4>
        <table>
            <thead>
                <tr>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($protocolos as $protocolo): ?>
                <tr>
                    <td><?php echo $protocolo->description;?></td>
                    <td>Eliminar/<?php echo $protocolo->id;?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    
    <div class="grid_14">
        <h4>Protocolos de experimentación de investigación con otros fines</h4>
        <table>
            <thead>
                <tr>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($protocolootrosfines as $protocolo): ?>
                <tr>
                    <td><?php echo $protocolo->description;?></td>
                    <td>Eliminar/<?php echo $protocolo->id;?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    
    
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
              if($archivo->type == "renovacionfirmainstitucion"):
                
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
            <form action="<?php echo site_url('renovaciones/acreditacionesSubirArchivo'); ?>" method="POST" enctype="multipart/form-data">
              <input type="file" name="archivo" size="20" />
              <input type="submit" value="upload" />
              <input type="hidden" value="<?php echo $renovacion->getId();?>" name="id"/>
              <input type="hidden" value="renovacionfirmainstitucion" name="type"/>
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
    <div class="clear"></div>
</div>
  
  <hr/>
<div class="clear"></div>
<a href="<?php echo site_url("renovaciones/index");?>">
  Volver
</a>
