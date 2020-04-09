<?php 
	/**
	 * Trang chủ backend
	 */
	class Ctrangchu extends MY_Controller
	{
	    public function __construct()
	    {
	    	parent::__construct();

	    }
	    public function index(){
	    	$session = $this->session->userdata('user');
	    	// pr($session);
	    	$data['message'] = getMessages();
	    	$temp['data'] = $data;
	    	$temp['template'] = 'Vtrangchu';
	    	$this->load->view('layout/content', $temp);
	    }
	}
	?>