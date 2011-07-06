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
		<form method="get" action="">
			replied?
			<select name="replied">
				<option value="">all</option>
				<option value="1">yes</option>
				<option value="-1">no</option>
			</select>
			visible?
			<select name="visible">
				<option value="">all</option>
				<option value="1">yes</option>
				<option value="-1">no</option>
			</select>
			<input type="submit" value="search" />
		</form>
		<h2>list</h2>
		<ul>
			<?php foreach ($message_list as $i=>$t) { ?>
			<li>
				<p style="background-color: lightcyan"><?php echo $t['user_name'] ?>@<?php echo $t['timeline'] ?></p>
				<p><?php echo $t['content'] ?></p>
				<p><span>Reply:</span><?php echo $t['reply_content'] ?></p>
				<p style="text-align: right">
					<?php if ($t['is_visible'] == 1) { ?>
					<a href="<?php echo site_url('a_message/hide').'?id='.$t['id'] ?>">hide</a>
					<?php  }else{ ?>
					<a href="<?php echo site_url('a_message/show').'?id='.$t['id'] ?>">show</a>
					<?php  } ?>
					<a href="<?php echo site_url('a_message/reply').'?id='.$t['id'] ?>">reply</a>
					<a href="<?php echo site_url('a_message/delete').'?id='.$t['id'] ?>">delete</a>
				</p>
			</li>
			<?php  } ?>
		</ul>
		
	</div>
</body>
</html>