<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title?></title>
		<style type="text/css">
.center_msg {
	border: 1px solid lightblue;
	padding: 10px;
	margin: 100px auto;
	width: 300px;
}
		</style>
	</head>
	<body>
		<div class="center_msg">
		<?php if($result){ ?>
			<h3>login succeed!</h3>
			<a href='<?php echo $this->session->flashdata('return_url'); ?>'>goto last page</a>
			<a href='<?php echo site_url("home/index") ?>'>goto home</a>
		<?php }else{ ?>
			<h3>login failed!</h3>
			<a href='<?php echo site_url("account/login") ?>'>back to login page</a>
		<?php } ?>
		</div>
	</body>
</html>