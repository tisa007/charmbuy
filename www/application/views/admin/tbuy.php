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
		<form method="post" action="<?php echo site_url('a_tbuy/add') ?>" enctype="multipart/form-data">
		<table class="form">
			<tr>
				<td>name</td>
				<td><input type="text" name="name" class="txt" /></td>
			</tr>
			<tr>
				<td>url</td>
				<td><input type="text" name="url" class="txt" /></td>
			</tr>
			<tr>
				<td>price</td>
				<td><input type="text" name="price" class="txt" /></td>
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
			<?php foreach ($tbuy_list as $i=>$t) { ?>
			<tr>
				<td><?php echo $i ?></td>
				<td>
					<img src="<?php echo $t['img'] ?>" alt="" />
				</td>
				<td>
					<?php echo $t['name'] ?>
				</td>
				<td>
					<?php echo $t['url'] ?>
				</td>
				<td>
					<?php echo $t['price'] ?>
				</td>
				<td>
					<a href="<?php echo site_url('a_tbuy/del').'?id='.$t['id'] ?>">delete</a>
				</td>
			</tr>
			<?php  } ?>
		</table>
	</div>
</body>
</html>