<?php
	$news = $this->db->get('news')->result_array();

	$contact['qq'] = preg_split('/\|/', $this->strings->read('contact_qq'));
	$contact['email'] = preg_split('/\|/', $this->strings->read('contact_email'));
	$contact['msn'] = preg_split('/\|/', $this->strings->read('contact_msn'));
?>
<div id='sidebar'>

	<div class="seller-wrap">
		<ul>
			<li>
				<a href="<?php echo site_url('seller/other') ?>">
					<img src="/public/img/taobao.png" alt="other sellers" />
				</a>
			</li>
			<li>
				<a href="<?php echo "http://vancl.com" ?>">
					<img src="/public/img/vancl.png" alt="vancl.com" />
				</a>
			</li>
		</ul>
	</div>
	
	<div class="contact-wrap">
		<h2>Contact us</h2>
		<ul id="contact">
			<li>
				<p>
					<b>Email:</b>
					<?php foreach ($contact['email'] as $qq) { ?>
					<a href="mailto:<?php echo $qq ?>"><img src="/public/img/email.png" alt=""/></a>
					<?php } ?>
				</p>
			</li>
			<li>
				<p>
					<b>MSN:</b>
					<?php foreach ($contact['msn'] as $qq) { ?>
					<a href="msn://<?php echo $qq ?>"><img src="/public/img/qq.png" alt=""/></a>
					<?php } ?>
				</p>
			</li>
			<li>
				<p>
					<b>QQ:</b>
					<?php foreach ($contact['qq'] as $qq) { ?>
					<a href="tencent://message/?uin=<?php echo $qq ?>&Site=&Menu=yes"><img src="/public/img/qq.png" alt=""/></a>
					<?php } ?>
				</p>
			</li>
		</ul>
		<div class="bg-b"></div>
	</div>
	
	<div class="tools-wrap">
		<h2>Tools</h2>
		<div class="cw">
			<h3>News</h3>
			<ul>
			<?php foreach($news as $item){ ?>
				<li>
					<a href="<?php echo site_url('news/view').'?id='.$item['id'] ?>"><?php echo $item['title'] ?></a>
				</li>
			<?php } ?>
			</ul>
			<h3>RATE</h3>
			<ul>
				<li><?php echo $this->strings->read('rmb_rate') ?></li>
			</ul>
			<h3>Working Time</h3>
			<ul>
				<li><?php echo $this->strings->read('working_time') ?></li>
			</ul>
			<h3>Beijing Time</h3>
			<ul>
				<li id="beijing_time"></li>
			</ul>
		</div>
	</div>
	
	<script type="text/javascript">
		function worldTime(timezone) {
			gmt = new Date();
			utc = gmt.getTime() + (gmt.getTimezoneOffset() * 60000);
			now = new Date(utc + (3600000*timezone));
			//return nd.toLocaleFormat("%m/%d/%Y");
			ndate = now.getFullYear() + '/' + (now.getMonth()+1) + '/' + now.getDate();
			ntime = now.getHours()+':'+now.getMinutes();//+':'+now.getSeconds();
			return ndate + ' ' + ntime;
			//return nd.toLocaleString();
		}
		function ticClock(){
			setTimeout(ticClock, 10000);
			$('#beijing_time').text(worldTime(+8));
		}
		$(function(){
			ticClock();
		});
	</script>
</div>