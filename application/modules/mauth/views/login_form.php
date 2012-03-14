<div id="wrapper">
    <div id="login_wrapper">
    <h1><?php echo lang('lg_titulo')?><span class="ico"></span></h1>
        <?php echo form_open('mauth/validate_credentials'); ?>
            <fieldset>
                    <label>
                        <strong><?php echo lang('lg_login')?></strong>
                        <span class="input_wrapper">
                            <input type="text" name="username"/>
                        </span>
                    </label>
                    <div class="clear"></div>
                    <label>
                        <strong><?php echo lang('lg_password')?></strong>
                        <span class="input_wrapper">
                            <input type="password" name="password"/>
                        </span>
                    </label>
                    <div class="clear"></div>
                    <p>
                        <span class="button send_form_btn">
                          <span><span><?php echo lang('lg_log_in')?></span></span>
                          <input type="submit" name=""/>
                        </span>
                    </p>
            </fieldset>
        <?php echo form_close(); ?>
        <?php if($errores): ?>
        <div class="error">
            <div class="error_inner">
                <strong><?php echo lang('lg_error')?></strong>
                <?php echo form_error('username'); ?>
                <?php echo form_error('password'); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--[if !IE]>end wrapper<![endif]-->
