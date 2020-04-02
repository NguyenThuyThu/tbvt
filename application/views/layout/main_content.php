<?php
	$data['url'] = base_url();
	$data['baseURL'] = base_url();
	$data['message'] = getMessages();
	$data['session'] = $this->session->userdata('user');
	$data['cart'] = "";
	if(!empty($data['session'])){
		$data['sumCart'] = getCart($data['session']['ma_thanhvien'])['tongCart'];
	}
	$this->parser->parse('layout/header1', $data);
	$this->parser->parse($template, $data);
	$this->parser->parse('layout/footer1', $data);
 ?>