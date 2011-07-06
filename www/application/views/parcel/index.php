<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php $this->load->view('common/head'); ?>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="clearfix">
		<?php $this->load->view('common/sidebar'); ?>
		<div id="primary">
			<?php $this->load->view('common/quickbar'); ?>
			<div id="parcel_list">
				<h2>Parcel Track</h2>
				<p class="long">
					After we give your parcel to the post office, we will email you the tracknumber.
				</p>
				<ul>
					<li>
						<h3>1. EMS</h3>
						<p class="long">
							Usually it takes 1-5 days to pass the custom.<br/>
							You can track the information of your parcel here:<br/>
							<a href="http://www.ems.com.cn/english-main.jsp">click here to visit</a>
						</p>
					</li>
					<li>
						<h3>2. Airmail,SAL,Airmail for small package:</h3>
						<p class="long">
							If you cannot get any information after 20 days(this is rare), 
							please inform us. We will connect the post office to check immediately.<br/>
							<a href="http://intmail.183.com.cn/item/itemStatusQuery.do;jsessionid=T2LCTLVXNd2XtyG6LwJmVGT1JLpzJWbz7JCLFBSgqvX5qRGs0PVq!-2008680703?lan=0">
								click here to visit
							</a>
						</p>
					</li>



				</ul>
			</div>
		</div>
	</div>
	<?php $this->load->view('common/footer'); ?>
</body>
</html>