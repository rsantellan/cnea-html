<div class="content_right img_instituciones">
  <h1>Formulario de Renovación Personal</h1>
    <?php echo lang("personal_formulario_enviado"); ?>
</div>
<!--CONTENT RIGHT-->

<script type="text/javascript">
  $(function()
  {
      if($("#renovacion_form").sayt({'checksaveexists': true}) == true){
         $('#renovacion_form').sayt({'erase': true});
      };
    });
</script>