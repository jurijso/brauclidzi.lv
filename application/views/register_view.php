<h1>Ещё не с нами? Присоединяйтесь!</h1>
<div><?php echo validation_errors(); ?></div>

<form role="form"  action="<?php echo base_url() ?>user/register" method="post">
	<div class="form-group">
		<select name="sex" id="sex" class="form-control input-xsmall">
			<option value=" " disabled  <?php if (!set_value('sex')) echo 'selected'; ?>><?php echo  $this->lang->line('register_sex') ?></option>
			<option value="male" <?php if (set_value('sex')=="male") echo 'selected'; ?>><?php echo  $this->lang->line('register_male') ?></option>
			<option value="female"<?php if (set_value('sex')=="female") echo 'selected'; ?>><?php echo  $this->lang->line('register_female') ?></option>
		</select>
	</div> 
	<div class="form-group">
		<input name="name" type="text" class="form-control input-small" id="input_name" placeholder="<?php echo  $this->lang->line('register_name') ?>" value="<?php echo set_value('name'); ?>">
	</div>	
	<div class="form-group">
		<input name="surname" type="text" class="form-control input-small" id="input-surname" placeholder="<?php echo  $this->lang->line('register_surname') ?>" value="<?php echo set_value('surname'); ?>">
	</div>
	<div class="form-group">
		<input name="email"  type="email" class="form-control input-small" id="input_email" placeholder="<?php echo  $this->lang->line('register_email') ?>" value="<?php echo set_value('email'); ?>">
	</div>
	<div class="form-group">
		<input name="password" type="password" class="form-control input-small" id="input_password" placeholder="<?php echo  $this->lang->line('register_password') ?>">
	</div>
	<div class="form-group">
		<input name="password_conf" type="password" class="form-control input-small" id="input_password_conf" placeholder="<?php echo  $this->lang->line('register_password_confirm') ?>">
	</div>
	<div class="form-group ">
		<select name="year_of_birth" id="input_year_of_birth" class="form-control input-small select_empty">
			<option value="0" disabled <?php if (!set_value('year_of_birth')) echo 'selected'; ?> class="select-lable"><?php echo  $this->lang->line('register_yearofbirth') ?></option>
			<?php for ($i=(date("Y")-18); $i >= (date("Y")-100) ; $i--) { ?>
			<option value="<?php echo $i ?>"  <?php if (set_value('year_of_birth')==$i) echo 'selected'; ?>><?php echo $i ?></option>
			<?php } ?>
		</select>
	</div> 
	<button type="submit" class="btn btn-primary" action="">Submit</button>
</form>