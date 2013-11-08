<div class="content_right img_instituciones">
  <h1><?php echo lang("personal_formulario_titulo"); ?></h1>
    <?php echo lang("personal_formulario_enviado"); ?>
</div>
<!--CONTENT RIGHT-->

<script type="text/javascript">
  $(function()
  {
      if($("#acreditacion_form").sayt({'checksaveexists': true}) == true){
         $('#acreditacion_form').sayt({'erase': true});
      };
    });
</script>