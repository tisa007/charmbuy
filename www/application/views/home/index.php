<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<?php $this->load->view('common/head'); ?>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="clearfix">
		<?php $this->load->view('common/sidebar'); ?>
		<div id="primary">
			<?php $this->load->view('common/quickbar'); ?>
			<div id="home_intro">
				<div class="slider-wrapper theme-default">
					<div class="ribbon"></div>
					<div id="slider" class="nivoSlider">
						<img src="<?php echo $this->strings->read('home_intro_01') ?>" alt="" />
						<img src="<?php echo $this->strings->read('home_intro_02') ?>" alt="" />
						<img src="<?php echo $this->strings->read('home_intro_03') ?>" alt="" />
					</div>
				</div>
			</div>
			<div id="home_step">
				<img src="<?php echo $this->strings->read('home_ad') ?>" alt="" />
			</div>
			<div id="they_buy" style="margin-top: 10px;">
				<h2>They bought:</h2>
				<ul class="clearfix">
				<?php foreach($tbuy_list as $i => $item){?>
					<li class="l">
						<img width="180px" src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>" />
						<a href="<?php echo $item['url'] ?>" style="display: block; text-align: center;">
							<?php echo $item['name'] ?>
						</a>
						<p>￥<?php echo $item['price'] ?></p>
					</li>
				<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>
</body>
</html>