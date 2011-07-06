<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php $this->load->view('common/head'); ?>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="clearfix">
		<?php $this->load->view('common/sidebar'); ?>
		<div id="primary">
			<?php $this->load->view('common/quickbar'); ?>
			<div id="cart_list">
				<h2>Products in shopcart :</h2>
				<table class="cart" cellspacing="1px">
					<thead>
					<tr>
						<th></th>
						<th width="20px">No</th>
						<th>Name</th>
						<th>Shop</th>
						<th width="60px">Price</th><th>Count</th><th>Comment</th>
					</tr>
					</thead>
					<tbody>
					<form method="post" action="<?php echo site_url('cart/next') ?>">
					<?php foreach($product_list as $id => $item){ ?>
						<input type="hidden" name="<?php echo $id.'_url' ?>" value="<?php echo $item['url'] ?>" />
						<input type="hidden" name="<?php echo $id.'_name' ?>" value="<?php echo $item['name'] ?>" />
						<input type="hidden" name="<?php echo $id.'_shop' ?>" value="<?php echo $item['shop'] ?>" />
						<input type="hidden" name="<?php echo $id.'_price' ?>" value="<?php echo $item['price'] ?>" />
						<tr>
							<td>
								<input type="checkbox" name="ids[]" checked="true" value="<?php echo $id ?>" />
							</td>
							<td><?php echo $id+1 ?></td>
							<td><?php echo $item['name'] ?></td>
							<td><?php echo $item['shop'] ?></td>
							<td><?php echo $item['price'] ?></td>
							<td>
								<input type="text" name="<?php echo $id.'_count' ?>" value="<?php echo $item['count'] ?>" size="2" />
							</td>
							<td>
								<input type="text" name="<?php echo $id.'_comment' ?>" value="<?php echo $item['comment'] ?>" size="10" />
							</td>
						</tr>
					<?php } ?>
						<tr>
							<td></td>
							<td colspan="6">
								<a href="<?php echo site_url('cart/clear'); ?>">clear cart</a>
								<input type="submit" />
							</td>
						</tr>
					</form>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
<script type="text/javascript">
	$();
</script>
</body>
</html>