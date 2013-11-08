<div class="content_right img_instituciones">
  <h1><?php echo lang("instituciones_formulario_titulo"); ?></h1>
    <?php echo lang("instituciones_formulario_enviado"); ?>
</div>
<!--CONTENT RIGHT-->

<script type="text/javascript">
  $(function()
  {
      if($("#institucion_form").sayt({'checksaveexists': true}) == true){
         $('#institucion_form').sayt({'erase': true});
      };
    });
</script>