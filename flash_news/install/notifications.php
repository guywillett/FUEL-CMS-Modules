<?php if (!empty($error)) :
	add_errors($error);
	echo display_errors('error ico_error');
?>
<?php elseif ($this->session->flashdata('error') AND $this->session->flashdata('error') !== TRUE AND $this->session->flashdata('success') !== '1') : 
	add_errors($this->session->flashdata('error'));
	echo display_errors('error ico_error');
?>
<?php elseif ($this->session->flashdata('success') AND $this->session->flashdata('success') !== TRUE AND $this->session->flashdata('success') !== '1') : ?>
	<div class="success ico_success"><?=$this->session->flashdata('success');?></div>
<?php else: ?>
	<?php echo display_errors('error ico_error')?>
<?php endif; ?>
<?php 
		$session_key = $this->fuel_auth->get_session_namespace();
		$user_data = $this->session->userdata($session_key);
	    if (!empty($user_data['flash_news'])) { ?>
	
				<div class="ico_info"><?=$user_data['flash_news']?></div>
<? } ?>
