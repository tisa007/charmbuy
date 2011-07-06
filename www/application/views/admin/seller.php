<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $title?></title>
	<link rel="stylesheet" type="text/css" href="/public/css/admin.css" />
</head>
<body style="margin: 0 auto;width: 900px;">
	<?php $this->load->view('admin/header') ?>
	<?php $this->load->view('admin/sidebar') ?>
	<div id="primary">
		<h2>add</h2>
		<form method="post" action="<?php echo site_url('a_seller/add') ?>" enctype="multipart/form-data">
		<table class="form">
			<tr>
				<td>name</td>
				<td><input type="text" name="name" class="txt" /></td>
			</tr>
			<tr>
				<td>link</td>
				<td><input type="text" name="link" class="txt" /></td>
			</tr>
			<tr>
				<td>site</td>
				<td><input type="text" name="site" class="txt" /></td>
			</tr>
			<tr>
				<td>image</td>
				<td><input type="file" name="image" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" /></td>
			</tr>
		</table>
		</form>
		<h2>list</h2>
		<table  class="form">
			<tr>
				<th>No</th><th>preview</th><th>name</th><th>url</th><th>price</th><th>op</th>
			</tr>
			<?php foreach ($seller_list as $i=>$t) { ?>
			<tr>
				<td><?php echo $i ?></td>
				<td>
					<img src="<?php echo $t['img'] ?>" alt="" />
				</td>
				<td>
					<?php echo $t['name'] ?>
				</td>
				<td>
					<?php echo $t['link'] ?>
				</td>
				<td>
					<?php echo $t['site'] ?>
				</td>
				<td>
					<a href="<?php echo site_url('a_seller/del').'?id='.$t['id'] ?>">delete</a>
				</td>
			</tr>
			<?php  } ?>
		</table>
	</div>
</body>
</html>