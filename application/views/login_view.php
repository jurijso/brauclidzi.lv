<h1><?php echo  $this->lang->line('login_title') ?></h1>
<?php echo validation_errors(); ?>
<form role="form" action="<?php echo base_url() ?>user/login" method="post">
  <div class="form-group">
    <input name="email" type="email" class="form-control input-small"  placeholder="<?php echo  $this->lang->line('login_email') ?>"  value="<?php echo set_value('email'); ?>">
  </div>
  <div class="form-group">
    <input name="password" type="password" class="form-control input-small"  placeholder="<?php echo  $this->lang->line('login_password') ?>" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>