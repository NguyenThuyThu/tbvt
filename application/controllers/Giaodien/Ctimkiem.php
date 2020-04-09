<?php 
	/**
	 * 
	 */
	class Ctimkiem extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model("Giaodien/Mtrangchu");
		}

		public function index(){
			if($this->input->post('timkiem')){
	            $value = $this->input->post('timkiem');
	            $kq = $this->Mtrangchu->search($value);
	            foreach ($kq as $key => $value) {
	            	$kq[$key]['dongia_sanpham'] = number_format($value['dongia_sanpham'], 0, ',', ','); 
	            }
	            echo json_encode($kq);
	            exit();
	        }
		}
	}
 ?>