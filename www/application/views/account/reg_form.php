<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<?php $this->load->view('common/head'); ?>
	</head>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="clearfix">
		<div class='l'>
			<h2>Register Charmbuy</h2>
			<hr/>
			<div class=''>
				<form action='reg' method='post'>
					<table>
					<tr style="height: 35px;"><td>name:</td><td><input type='text' name='name' /></td></tr>
					<tr><td></td><td><?php echo form_error('name');?></td></tr>
					<tr style="height: 35px;"><td>password:</td><td><input type='text' name='password' /></td></tr>
					<tr><td></td><td><?php echo form_error('password');?></td></tr>
					<tr style="height: 35px;"><td>email:</td><td><input type='text' name='email' /></td></tr>
					<tr><td></td><td><?php echo form_error('email');?></td></tr>
					<tr>
						<td></td>
						<td>
							<input class="btn_blue r5px" type='submit' value='reg' />
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<?php echo anchor('account/login', 'already a charmbuy user') ?>
						</td>
					</tr>
					</table>
				</form>
			</div>
			<?php if ($this->auth->has_login()) { ?>
			<p>already logined, <?php echo anchor('home/index', 'goto home') ?></p>
			<?php } ?>
		</div>
		<div class="right_70">
			<img src="/public/img/intro.png" />
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
</body>
</html>