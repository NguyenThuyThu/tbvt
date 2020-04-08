<?php
	date_default_timezone_set('Asia/Bangkok');
	$data['url'] = base_url();
	$data['session'] = $this->session->userdata('user');
	$data['message'] = getMessages();
	$this->parser->parse('layout/header', $data);
	$this->parser->parse($template, $data);
	$this->parser->parse('layout/footer', $data);
 ?>