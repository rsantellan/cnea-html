<div class="grid_16">
  <h4>Institución</h4>
  <div id="institucion_data_<?php echo $institucion->getId();?>">
    <?php 
        $this->load->view('registros/instituciones/showinstitucion', array('institucion' => $institucion));
    ?>
  </div>
  <div class="clear"></div>
  <a href="<?php echo site_url('registros/editMinInstitucion/'.$institucion->getId()); ?>" class="fancy_link" title="Editar">Editar</a>
  <hr/>
  <h6>ESPECIES CRIADAS Y/O UTILIZADAS</h6>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>observacion</th>
        <th>escria</th>
        <th>esuso</th>
        <th>acciones</th>
      </tr>
    </thead>
    <tbody id="listado_especies">
      <?php 
      foreach($especies as $especie):
      ?> 
        <?php 
        $this->load->view('registros/instituciones/showespecie', array('especie' => $especie));
        ?>
      <?php 
      endforeach;
      ?>
    </tbody>
  </table>
    <a href="<?php echo site_url('registros/addEspecie/'.$institucion->getId()); ?>" class="fancy_link" title="Agregar">Agregar</a>
  <hr/>
  <h6>Docente / Investigador</h6>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>profesion</th>
        <th>ocupacion</th>
        <th>acciones</th>
      </tr>
    </thead>
    <tbody id="listado_docentes_investigadores">
      <?php 
        foreach($docentesinvestigadores as $doceinve):
        ?>
        <?php 
        $this->load->view('registros/instituciones/showdocenteinvestigador', array('doceinve' => $doceinve));
        ?>
        <?php 
        endforeach;
        ?>
    </tbody>
  </table>
  <a href="<?php echo site_url('registros/addDocenteInvestigador/'.$institucion->getId()); ?>" class="fancy_link" title="Agregar">Agregar</a>
  <hr/>
  <h6>Veterinario</h6>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>profesion</th>
        <th>ocupacion</th>
        <th>acciones</th>
      </tr>
    </thead>
    <tbody id="listado_veterinarios">
      <?php 
        foreach($veterinarios as $veterinario):
        ?>
        <?php 
        $this->load->view('registros/instituciones/showveterinario', array('veterinario' => $veterinario));
        ?>
        <?php 
        endforeach;
        ?>
    </tbody>
  </table>
  <a href="<?php echo site_url('registros/addVeterinario/'.$institucion->getId()); ?>" class="fancy_link" title="Agregar">Agregar</a>
  <hr/>
  <h6>Sociedad Civil</h6>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>profesion</th>
        <th>ocupacion</th>
        <th>acciones</th>
      </tr>
    </thead>
    <tbody id="listado_sociedades">
      <?php 
        foreach($sociedadesciviles as $sociedadcivil):
        ?>
        <?php 
        $this->load->view('registros/instituciones/showsociedad', array('sociedadcivil' => $sociedadcivil));
        ?>
        <?php 
        endforeach;
        ?>
    </tbody>
  </table>
  <a href="<?php echo site_url('registros/addSociedad/'.$institucion->getId()); ?>" class="fancy_link" title="Agregar">Agregar</a>
  <hr/>
  <h6>Unidades dependientes</h6>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach($unidadesdependientes as $unidaddependiente):
        ?>  
        <?php 
        $this->load->view('registros/instituciones/showunidaddependiente', array('unidaddependiente' => $unidaddependiente));
        ?>
        <?php 
        endforeach;
        ?>
    </tbody>
  </table>
  <hr/>
  
  <h6>Copia de la resolución de su institución</h6>
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
        ?>  
      <tr id="archivo_<?php echo $archivo->id;?>">
        <td><?php echo $archivo->filename; ?></td>
        <td>
          
          <a href="<?php echo site_url("registros/downloadArchivo/".$archivo->id);?>">Descargar</a>
          <a href="javascript:void(0)" onclick="return basicDelete(<?php echo $archivo->id?>, 'archivo_<?php echo $archivo->id;?>', 'Esta seguro de querer eliminar?', '<?php echo site_url("registros/removeArchivo");?>')">Borrar</a>
        </td>
      </tr>
        <?php 
        endforeach;
        ?>
    </tbody>
  </table>
  
  
  <div class="clear"></div>
  <div id="add_archivo_form" style="<?php if(!isset($errores) && !isset($errores['archivo'])):?>display:none<?php endif;?>">
    <div class="grid_5">
      <span>
        <label>Subir resolucion</label>
        <form action="<?php echo site_url('registros/institucionesSubirResolucion'); ?>" method="POST" enctype="multipart/form-data">
          <input type="file" name="archivo" size="20" />
          <input type="submit" value="upload" />
          <input type="hidden" value="<?php echo $institucion->getId();?>" name="id"/>
        </form>
      </span>
    </div>
  </div>
  
  <?php if(isset($errores) && isset($errores['archivo'])):?>
    
  <div class="clear"></div>
  <div class="grid_5">
    <div class="error">
      <?php echo $errores['archivo'];?>
    </div>
  </div>  
  <?php endif; ?>
    
    
    
  
  <div class="clear"></div>
  <a href="javascript:void(0)" onclick="$('#add_archivo_form').slideToggle('slow');">Agregar</a>
  <hr/>
  <div class="clear"></div>
  <h6>Responsable Institucional</h6>
  <div class="grid_5">
    <span>
      <label>Descargar</label>
      <a href="<?php echo site_url('registros/downloadDescargarResponsable/'.$institucion->getId()); ?>"><?php echo $institucion->getCvfilename();?></a>
      
    </span>
  </div>
  <div class="clear"></div>
  <div id="edit_responsable_form" style="<?php if(!isset($errores) && !isset($errores['responsable'])):?>display:none<?php endif;?>">
      <div class="grid_5">
        <span>
          <label>Cambiar responsable</label>
          <form action="<?php echo site_url('registros/institucionesCambiarResponsable'); ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" size="20" />
            <input type="submit" value="upload" />
            <input type="hidden" value="<?php echo $institucion->getId();?>" name="id"/>
          </form>
        </span>
      </div>
    </div>

    <?php if(isset($errores) && isset($errores['responsable'])):?>

    <div class="clear"></div>
    <div class="grid_5">
      <div class="error">
        <?php echo $errores['responsable'];?>
      </div>
    </div>  
    <?php endif; ?>




    <div class="clear"></div>
    <a href="javascript:void(0)" onclick="$('#edit_responsable_form').slideToggle('slow');">Cambiar</a>
  

  <hr/>
  <h5>Contraseña</h5>
  <div class="grid_10">
    <span>
      <label>Contraseña para ver las personas acreditadas</label>
      <span id="pass_field">
        <?php echo $institucion->getPassword();?>
      </span>
      
    </span>
    <a href="javascript:void(0)" onclick="return changePassword(<?php echo $institucion->getId()?>, 'pass_field', 'Esta seguro de querer cambiar?', '<?php echo site_url("registros/cambiarPass");?>')">Cambiar</a>
  </div>
  <hr/>
  
  <?php //var_dump($institucion); ?>
</div>




<a href="<?php echo site_url('registros/instituciones'); ?>"> Volver al indice </a>
