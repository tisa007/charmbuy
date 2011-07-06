<div id='footer'>
	<p>Page rendered in {elapsed_time} seconds</p>
</div>
<script type="text/javascript">
	var msg = "<?php echo $this->session->flashdata('msg'); ?>";
	$(document).ready(function() {
		if (msg != null && msg.length>0) {
			$.growlUI('Notification', msg);
		};
	});
</script>