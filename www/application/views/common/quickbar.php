<div  id='quickbar'>
<table width="100%">
	<form name="quickbar" action='<?php echo site_url("cart/add") ?>' method='post'>
	<tr>
		<td class="">
			<div class="txt_grey r5px"><div>
			<input class="txt" type='text' name='url' />
			</div></div>
		</td>
		<td style="text-align: center; width: 120px">
			<!-- <a class="btn_blue r5px" onclick="javascript:alert(document.form['quickbar'])" href="">Order now</a> -->
			<input class="btn_blue r5px" type="submit" value="Order now" />
		</td>
		
		<?php if($this->auth->has_login()){ ?>
		<td style="text-align: right;width: 100px">
			<a class="btn_grey r5px" href="<?php echo site_url('account/logout') ?>">Logout</a>
		</td>
		<?php }else{ ?>
		<td style="text-align: right; width: 180px">
			<a class="btn_grey r5px" href="<?php echo site_url('account/login') ?>">Login</a>
			<a class="btn_grey r5px" href="<?php echo site_url('account/reg') ?>">Register</a>
		</td>
		<?php } ?>
	</tr>
	</form>
</table>
</div>