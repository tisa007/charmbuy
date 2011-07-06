<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php $this->load->view('common/head'); ?>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="clearfix">
		<?php $this->load->view('common/sidebar'); ?>
		<div id="primary">
			<div id="cart_list">
				<h2>view all messages:</h2>
				<table class="cart" cellspacing="1px">
					<tbody>
					<?php foreach($message_list as $item){ ?>
						<tr>
							<td><?php echo $item['id'] ?></td>
							<td><?php echo $item['user_name'] ?></td>
							<td><?php echo $item['timeline'] ?></td>
						</tr>
						<tr>
							<td>content:</td><td colspan="2"><?php echo $item['content'] ?></td>
						</tr>
						<?php if (!empty ($item['has_replied'])) { ?>
						<tr>
							<td>reply:</td><td colspan="2"><?php echo $item['reply_content'] ?></td>
						</tr>
						<?php } ?>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
</body>
</html>