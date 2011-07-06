<?php
$navi = array(
	array('link' => site_url('home'),	'text' => '&nbsp;&nbsp; Home ',			'class'=> '',),
	array('link' => site_url('qanda'),	'text' => 'Q & A',	'class'=> '',),
	array('link' => site_url('e3steps'),	'text' => 'Easy 3 steps',	'class'=> '',),
	array('link' => site_url('cart'),	'text' => 'Shopping Cart',		'class'=> '',),
	array('link' => site_url('payment'),	'text' => 'Payment',	'class'=> '',),
	array('link' => site_url('delivery'),	'text' => 'Delivery Fee',	'class'=> '',),
	array('link' => site_url('parcel'),	'text' => 'Track Parcel',	'class'=> '',),
	array('link' => site_url('message'),	'text' => 'Leave Message',	'class'=> '',),
);
function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}
$current_url = current_url();
foreach ($navi as $i => $n) {
	if (startsWith($current_url, $n['link'])) {
		$navi[$i]['class'] = 'selected';
	}
}
?>

<div id='header' class="clearfix">
	<!-- <div id="logo">
		<a href="">
			<img width="180px" src="/public/img/logo.png" alt="" />
		</a>
	</div> -->
	<div class="navi-wrap">
		<table id='navi' width="100%" height="100%">
			<tr>
				<?php foreach ($navi as $i => $n) { ?>
				<td >
					<a class="<?php echo $n['class'] ?>"
					   href="<?php echo $n['link'] ?>"><?php echo $n['text'] ?></a>
				</td>
				<?php } ?>
			</tr>
		</table>
		<div class="l-bg"></div>
		<div class="r-bg"></div>
	</div>
</div>
<!--
<div>
<?php if ($this->auth->has_login()) { ?>
	<?php echo anchor('account/logout', 'logout'); ?>
<?php } else { ?>
	<?php echo anchor('account/reg', 'reg'); ?>
	<?php echo anchor('account/login', 'login'); ?>
<?php } ?>
</div>
-->