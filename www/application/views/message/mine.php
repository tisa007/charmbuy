<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php $this->load->view('common/head'); ?>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="clearfix">
		<?php $this->load->view('common/sidebar'); ?>
		<div id="primary">
			<div id="">
				<h2>view all messages:</h2>
				<ul>
					<?php foreach($message_list as $item){ ?>
					<li style="border-bottom: 1px solid lightblue; padding: 5px 10px;">
						<h3 style="color: gray;padding-bottom: 5px;"><?php echo $item['user_name'] ?> @ <?php echo $item['timeline'] ?></h3>
						<p><?php echo $item['content'] ?></p>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div id="">
				<h2>you can post message here:</h2>
				<form method="post" action="<?php echo site_url('message/mine') ?>">
					<table>
					<tr><td><textarea name="content" rows="3" cols="90"></textarea></td></tr>
					<tr><td><?php echo form_error('content');?></td></tr>
					<tr><td><input type='submit' value='post' /></td></tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
</body>
</html>