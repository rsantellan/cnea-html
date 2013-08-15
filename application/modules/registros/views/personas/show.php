<div class="grid_16">
  <h4>Acreditacion Persona</h4>
  <div id="acreditacion_data_<?php echo $acreditacion->getId(); ?>">
    <div class="grid_5">
      <span>
        <label>Fecha</label>
        <?php echo $acreditacion->getFecha(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Nombre y Apellido</label>
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
        <label>% Investigacion</label>
        <?php echo $acreditacion->getPctinvestigacion(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Medicina Clinica</label>
        <?php echo $acreditacion->getPctmedicinaclinica(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Cirugia</label>
        <?php echo $acreditacion->getPctcirugia(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Mantenimiento Colonias</label>
        <?php echo $acreditacion->getPctmantenimientocolonias(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Manipulación</label>
        <?php echo $acreditacion->getPctmanipulacion(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Dirección de Projectos</label>
        <?php echo $acreditacion->getPctdirprojectos(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Necropsia</label>
        <?php echo $acreditacion->getPctnecropsia(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Diagnostico Laboratorio</label>
        <?php echo $acreditacion->getPctdiaglaboratorio(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% CEUA</label>
        <?php echo $acreditacion->getPctceua(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Histopatologia</label>
        <?php echo $acreditacion->getPcthistopatologia(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Entrenamiento / Educacion</label>
        <?php echo $acreditacion->getPctentedu(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Apoyo Investigadores</label>
        <?php echo $acreditacion->getPctapoyoinvestigadores(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Supervision</label>
        <?php echo $acreditacion->getPctsupervision(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Produccion animal</label>
        <?php echo $acreditacion->getPctprodanimal(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Responsabilidad Legal</label>
        <?php echo $acreditacion->getPctlegal(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Otras Funciones</label>
        <?php echo $acreditacion->getPctotrasfunciones(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>% Funciones No Relacionadas</label>
        <?php echo $acreditacion->getPctfuncnorel(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Observaciones de Porcentajes</label>
        <?php echo $acreditacion->getPctobservaciones(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Categoria</label>
        <?php echo $acreditacion->getCategoria(); ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Fecha de Vencimiento</label>
        <?php echo $acreditacion->getFechavencimiento(); ?>
      </span>
    </div>
    <div class="clear"></div>
    <a href="<?php echo site_url("registros/editarPersona/".$acreditacion->getId());?>">Editar</a>
    <div class="clear"></div>
    <div class="grid_5">
      <span>
        <label>Realizo Cursos</label>
        <?php echo ($acreditacion->getRealizocursos() == 1)? "Si" : "No"; ?>
      </span>
    </div>
    <div class="grid_5">
      <span>
        <label>Acreditaciones Personales</label>
        <?php echo ($acreditacion->getAcrpersonales() == 1)? "Si" : "No"; ?>
      </span>
    </div>
  </div>
  <div class="clear"></div>
  <?php //var_dump($acreditacion); ?>
  <hr/>
  <?php //var_dump($institucion); ?>
</div>