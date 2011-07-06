<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php $this->load->view('common/head'); ?>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="clearfix">
		<?php $this->load->view('common/sidebar'); ?>
		<div id="primary">
			<?php $this->load->view('common/quickbar'); ?>
			<div id="payment_list">
				<h2>Delivery fee</h2>
				<p class="long">
					The exact delivery fee is calculated by the exact weight and the country.
					Different delivery ways also have different price. here is a direct way to calculate the delivery fee:
					Click <a href="http://www.yw56.com.cn/english/index-en.asp">http://www.yw56.com.cn/english/index-en.asp</a> ,
					find rate count and complete country, quality (goods),weight (by g) then click calculate,
					discount part if EMS write 50(%) then you will see the exact price by cny.
				</p>
				<ul>
					<li>
						<h3>1. EMS:</h3>
						<p class="long">
							Fast (7-10 days to arrive) and easy to pass the custom. If you choose EMS, we can give you 50%off.
						</p>
					</li>
					<li>
						<h3>2. Airmail:</h3>
						<p class="long">
							slower than EMS(15-35 days to arrive) and may take more time when pass the custom. But it is cheap.
						</p>
					</li>
					<li>
						<h3>3. SAL:</h3>
						<p class="long">
							cheaper than airmail but slower than Airmail (40-60 days).
						</p>
					</li>
					<li>
						<h3>4. Airmail for small package:</h3>
						<p class="long">
							for small package under 2kg. the cheapest way to delivery, takes about 2 months to arrive.
						</p>
					</li>
					<li>
						<h3>5. TNT, DHL, FedEx, UPS...</h3>
						<p class="long">
							yes, they are fast and famous, but also very expensive, if you insist on shipping by them,
							please email us when ready for shipping, we will check whether your parcel is ok to use them.
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
</body>
</html>