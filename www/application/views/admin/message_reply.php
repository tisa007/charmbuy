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
		<h2>message</h2>
		<div>
			<p style="background-color: lightcyan"><?php echo $message['user_name'] ?>@<?php echo $message['timeline'] ?></p>
			<p><?php echo $message['content'] ?></p>
		</div>
		<h2>reply</h2>
		<div>
			<form method="post">
				<input type="text" name="content" value="<?php echo $message['reply_content'] ?>" />
				<input type="submit" />
			</form>
		</div>
	</div>
</body>
</html>