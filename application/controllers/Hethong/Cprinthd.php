<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller
*
**/
class Cprinthd extends MY_Controller 
{
	public function __construct() {
        parent:: __construct();
        $this->load->model('Hethong/Mdonhang');
	}
	public function index() {
		
		$session = $this->session->userdata('user');
		$ma_hoadon=$this->input->get('hoadon');
        $content 	= $this->Mdonhang->getdulieu($ma_hoadon);
        // pr($content);
        $danhsachdonhang = $this->Mdonhang->getDonhang();
		foreach ($danhsachdonhang as $key => $value) {
			// $danhsachdonhang[$key]['ctdonhang'] = json_encode($this->Mdonhang->getCTDH($value['ma_hoadonmua']));
			$danhsachdonhang[$key]['ctdonhang'] = $this->Mdonhang->getCTDH($value['ma_hoadonmua']);
		}

        // pr($danhsachdonhang);
		
		$temp = array(
			'template' => 'Hethong/Vprinthd',
			'data' => array(
				'content'	    => $content,
				'danhsachdonhang' => $danhsachdonhang,
			)
		);
		$this->load->view('layout/layout_baocao',$temp);
	}
}