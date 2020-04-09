<?php 
	/**
	 * summary
	 */
	class Cwebsite extends CI_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Giaodien/Mtrangchu');
	        
	    }
	    public function index(){
	    	// $this->session->unset_userdata('user');
	    	// pr($this->Mtrangchu->get_sanpham());	
	    	$temp = array(
	    		'template' => 'Giaodien/Vtrangchu',
	    		'data'	=> array(
	    			'dssp' => $this->Mtrangchu->get_sanpham(),
	    			'dmsp' => $this->Mtrangchu->get_dmsanpham(),
	    		),
	    	);
        	$this->load->view('layout/main_content', $temp);
	    }
	}
 ?>