<div class="grid_16">
  <h4>Institución</h4>
  <div class="grid_5">
    <span>
      <label>nombreinsititucion</label>
      <?php echo $institucion->getNombreinsititucion(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>razonsocial</label>
      <?php echo $institucion->getRazonsocial(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>rut</label>
      <?php echo $institucion->getRut(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>naturaleza</label>
      <?php echo $institucion->getNaturaleza(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>primernivel</label>
      <?php echo $institucion->getPrimernivel(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>segundonivel</label>
      <?php echo $institucion->getSegundonivel(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>tercernivel</label>
      <?php echo $institucion->getTercernivel(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>domicilioinstitucional</label>
      <?php echo $institucion->getDomicilioinstitucional(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>domiciliofiscal</label>
      <?php echo $institucion->getDomiciliofiscal(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>domicilioinstitucional</label>
      <?php echo $institucion->getDomicilioinstitucional(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>tipoestablecimiento</label>
      <?php echo $institucion->getTipoestablecimiento(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>observacionescomite</label>
      <?php echo $institucion->getObservacionescomite(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>nombrecontacto</label>
      <?php echo $institucion->getNombrecontacto(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>mailcontacto</label>
      <?php echo $institucion->getMailcontacto(); ?>
    </span>
  </div>
  <div class="grid_5">
    <span>
      <label>telcontacto</label>
      <?php echo $institucion->getTelcontacto(); ?>
    </span>
  </div>
  <a href="javascript:void(0)">Editar</a>
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
    <tbody>
      <?php 
      foreach($especies as $especie):
      ?> 
      <tr>
        <td>
          <?php echo $especie->nombre; ?>
        </td>
        <td>
          <?php echo $especie->observacion; ?>
        </td>
        <td>
          <?php echo ($especie->escria == 1)? "Si" : "No"; ?>
        </td>
        <td>
          <?php echo ($especie->esuso == 1)? "Si" : "No"; ?>
        </td>
        <td>
          <a href="javascript:void(0)">Editar</a>
          <a href="javascript:void(0)">Borrar</a>
        </td>
      </tr>
      <?php 
      endforeach;
      ?>
    </tbody>
  </table>
    <a href="javascript:void(0)">Agregar</a>
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
          <a href="javascript:void(0)">Descargar</a>
          <a href="javascript:void(0)">Eliminar</a>
        </td>
      </tr>
        <?php 
        endforeach;
        ?>
    </tbody>
  </table>
  <a href="javascript:void(0)">Agregar</a>
  <hr/>
  
  <h6>Responsable Institucional</h6>
  <div class="grid_5">
    <span>
      <label>Descargar</label>
      <a href="javascript:void(0)"><?php echo $institucion->getCvfilename();?></a>
      
    </span>
  </div>
  <hr/>
  <h5>Contraseña</h5>
  <div class="grid_10">
    <span>
      <label>Contraseña para ver las personas acreditadas</label>
      <?php echo $institucion->getPassword();?>
    </span>
  </div>
  <hr/>
  <?php //var_dump($institucion); ?>
</div>

<hr/>

<a href="<?php echo site_url('registros/instituciones'); ?>"> Volver al indice </a>
