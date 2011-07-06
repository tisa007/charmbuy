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
						<th>Name</th><th>Shop</th><th>Price</th><th>Count</th>
					</tr>
					</thead>
					<tbody>
					<form method="post" action="<?php echo site_url('cart/gen_order') ?>">
					<?php foreach($product_list as $key => $item){ ?>
						<tr>
							<td><?php echo $item['name'] ?></td>
							<td><?php echo $item['shop'] ?></td>
							<td><?php echo $item['price'] ?></td>
							<td>
								<?php echo $item['count'] ?>
								<input type="hidden" name="urls[]" value="<?php echo $item['url'] ?>" />
							</td>
						</tr>
					<?php } ?>
						<tr>
							<td colspan="4">
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
</body>
</html>