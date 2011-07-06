<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title?></title>
	</head>
	<body>
		<div id='topic'>
		<?php if($result){ ?>
			<h3>注册成功，请登录。</h3>
			<a href='/'>goto home</a>
		<?php }else{ ?>
			<h3>注册失败，请重试。</h3>
			<a href='account/reg'>重新注册</a>
		<?php } ?>
		</div>
	</body>
</html>