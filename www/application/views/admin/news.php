<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
		<form method="post" action="<?php echo site_url('a_news/add') ?>">
		<table class="form">
			<tr>
				<td>title</td>
				<td><input type="text" name="title" class="txt" /></td>
			</tr>
			<tr>
				<td>content</td>
				<td><textarea name="content" rows="3"></textarea></td>
			</tr>
			<tr>
				<td>after</td>
				<td><input type="text" name="after" class="txt-m" /></td>
			</tr>
			<tr>
				<td>before</td>
				<td><input type="text" name="before" class="txt-m" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" /></td>
			</tr>
		</table>
		</form>
		<h2>list</h2>
		<ul>
			<?php foreach ($news_list as $i=>$t) { ?>
			<li>
				<h3><?php echo $t['title'] ?></h3>
				<p><?php echo $t['content'] ?></p>
				<p style="text-align: right">
					[
					<span><?php echo date('Y/m/d', $t['after']) ?></span>
					-
					<span><?php echo date('Y/m/d', $t['before']) ?></span>
					]
					<a href="<?php echo site_url('a_news/delete').'?id='.$t['id'] ?>">delete</a>
				</p>
			</li>
			<?php  } ?>
		</ul>
		
	</div>
</body>
</html>