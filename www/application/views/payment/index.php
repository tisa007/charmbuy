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
				<h2>We accept payment with the following 3 ways:</h2>
				<ul>
					<li>
						<h3>1. Paypal</h3>
						<a href="">
							<img src="/public/img/paypal.gif" alt="paypal.com" />
						</a>
						<p class="long">
							Account：<br/>
							Brad charmbuy01@hotmail.com<br/>
							Alice charmbuy01@hotmail.com<br/>
							Paypal fee：4%
						</p>
					</li>
					<li>
						<h3>2. westernunion</h3>
						<a href="http://www.westernunion.com/WUCOMWEB/staticMid.do?method=load&countryCode=US&languageCode=en&pagename=HomePage&rootRedirect=true">
							<img src="/public/img/westunion.gif" alt="westernunion.com" />
						</a>
						<p class="long">
							Account：<br/>
							First name: ke<br/>
							last name: wang<br/>
							city:Beijing<br/>
							country: China<br/>
							Westunion fee：10-15USD（so if you want to pay more than 250$, use westunion can save your money）
						</p>
					</li>
					<li>
						<h3>3. Bank money transfer( T/T )</h3>
						<p class="long">
							please contact us first before you paying by bank transfer<br/>
							Bank Name:  Bank of China, Beijing BranchBank SWIFT Code: BKCHCNBJ110<br/>
							Address: street No.2  Chaoyang MenNeiDajie,Dongcheng District, Beijing 100010,China<br/>
							Name:  Youyuan Zhang<br/>
							Account no: 6013820100011516963
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
</body>
</html>