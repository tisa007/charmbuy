<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php $this->load->view('common/head'); ?>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="clearfix">
		<?php $this->load->view('common/sidebar'); ?>
		<div id="primary">
			<?php $this->load->view('common/quickbar'); ?>
			<div>
				<img width="100%" src="<?php echo $this->strings->read('img_step_seller') ?>" alt="" />
			</div>
			<div id="seller_list">
				<h2>Sellers :</h2>
				<ul class="clearfix">
					<?php foreach($seller_list as $i => $item){ ?>
					<li class="l">
						<a href="<?php echo $item['link'] ?>">
						<img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>" />
						<p><?php echo $item['name'] ?></p>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
<script type="text/javascript">
	$();
</script>
</body>
</html>