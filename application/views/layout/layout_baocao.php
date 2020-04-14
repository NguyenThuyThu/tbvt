<?php
	date_default_timezone_set('Asia/Bangkok');
	$data['url'] = base_url();
	$data['session'] = $this->session->userdata('user');
	$this->parser->parse($template,$data);
?>