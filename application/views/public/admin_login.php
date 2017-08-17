<?DOCTYPE html>
<html>
<head>
<title>Admin Login Portal</title>
<link rel="stylesheet" type="text/css"  href="<?= base_url('assets/css/bootstrap.min.css'); ?> ">
</head>
<body>
<div class="container" style="margin-top:55px;">
	
	<?php echo form_open('login/admin_login',['class'=>'form-horizontal']); ?>
		<fieldset>
			<legend>Admin Login</legend>
			<?php if($error=$this->session->flashdata('login_failed')): ?>
				<div class="row">
					<div class="col-lg-6">
						<div class="alert alert-dismissible alert-danger">
							<?= $error ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
				<label for="inputmail" class="col-lg-2 control-label">User Name</label>
			<div class="col-lg-10">
				<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]); ?>
			</div>
			</div>
				</div>
				<div class="col-lg-6">
				<?php echo form_error('username')?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
				<label for="inputpass" class="col-lg-2 control-label">Password</label>
			<div class="col-lg-10">
				<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Paasword']); ?>
			</div>
			</div>
				</div>
				<div class="col-lg-6">
				<?php echo form_error('password'); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); ?>
					<?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Login']); ?>
				</div>
			</div>
		</fieldset>
	</form>
</div>

<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>