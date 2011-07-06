<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $title?></title>
	<link rel="stylesheet" type="text/css" href="/public/css/admin.css" />
	<title>charmbuy</title>
</head>
<body style="margin: 0 auto;width: 900px;">
	<?php $this->load->view('admin/header') ?>
	<?php $this->load->view('admin/sidebar') ?>
	<div id="primary">
		<h2>main</h2>
		<form method="post" action="<?php echo site_url('a_common/save_main') ?>">
		<table class="form">
			<tr>
				<th width="15%">name</th><th width="*">value</th>
			</tr>
			<tr>
				<td>site_name</td>
				<td><input type="text" name="site_name" value="<?php echo $strings['site_name'] ?>" class="txt" /></td>
			</tr>
			<tr>
				<td>rmb_rate</td>
				<td><input type="text" name="rmb_rate" value="<?php echo $strings['rmb_rate'] ?>" class="txt" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" /></td>
			</tr>
		</table>
		</form>
		<h2>contact</h2>
		<form method="post" action="<?php echo site_url('a_common/save_contact') ?>">
		<table class="form">
			<tr>
				<th width="15%">name</th><th width="*">value</th>
			</tr>
			<tr>
				<td>contact_qq</td>
				<td><input type="text" name="contact_qq" value="<?php echo $strings['contact_qq'] ?>" class="txt" /></td>
			</tr>
			<tr>
				<td>contact_msn</td>
				<td><input type="text" name="contact_msn" value="<?php echo $strings['contact_msn'] ?>" class="txt" /></td>
			</tr>
			<tr>
				<td>contact_skype</td>
				<td><input type="text" name="contact_skype" value="<?php echo $strings['contact_skype'] ?>" class="txt" /></td>
			</tr>
			<tr>
				<td>contact_email</td>
				<td><input type="text" name="contact_email" value="<?php echo $strings['contact_email'] ?>" class="txt" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" /></td>
			</tr>
		</table>
		</form>
		
		<h2>ad</h2>
		<table class="form">
			<tr>
				<th width="15%">name</th><th width="25%">preview</th><th width="*">value</th><th>operation</th>
			</tr>
			<tr>
			<form method="post" action="<?php echo site_url('a_common/save_image') ?>" enctype="multipart/form-data">
				<td>home_ad</td>
				<td><img src="<?php echo $strings['home_ad'] ?>" alt="" /></td>
				<td>
					<input type="file" name="image" />
					<input type="hidden" name="image_key" value="home_ad" />
				</td>
				<td><input type="submit"  /></td>
			</form>
			</tr>
		</table>
		
		<h2>intro and step images</h2>
		<table class="form">
			<tr>
				<th width="15%">name</th><th width="25%">preview</th><th width="*">value</th><th>operation</th>
			</tr>
			<tr>
			<form method="post" action="<?php echo site_url('a_common/save_image') ?>" enctype="multipart/form-data">
				<td>home_intro_01</td>
				<td><img src="<?php echo $strings['home_intro_01'] ?>" alt="" /></td>
				<td>
					<input type="file" name="image" />
					<input type="hidden" name="image_key" value="home_intro_01" />
					<input type="hidden" name="image_width" value="800" />
				</td>
				<td><input type="submit"  /></td>
			</form>
			</tr>
			<tr>
			<form method="post" action="<?php echo site_url('a_common/save_image') ?>" enctype="multipart/form-data">
				<td>home_intro_02</td>
				<td><img src="<?php echo $strings['home_intro_02'] ?>" alt="" /></td>
				<td>
					<input type="file" name="image" />
					<input type="hidden" name="image_key" value="home_intro_02" />
				</td>
				<td><input type="submit"  /></td>
			</form>
			</tr>
			<tr>
			<form method="post" action="<?php echo site_url('a_common/save_image') ?>" enctype="multipart/form-data">
				<td>home_intro_03</td>
				<td><img src="<?php echo $strings['home_intro_03'] ?>" alt="" /></td>
				<td>
					<input type="file" name="image" />
					<input type="hidden" name="image_key" value="home_intro_03" />
				</td>
				<td><input type="submit"  /></td>
			</form>
			</tr>
		</table>
	</div>
</body>
</html>