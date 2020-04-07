<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller
*
**/
class Cnhapdonhang extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hethong/Mnhapdonhang');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		if($this->input->post('themdonhang')){
			$this->themdonhang();
		}
		
		$temp = array(
			'template' => 'Hethong/Vnhapdonhang',
			'data' => array(
				'trangthaigh' => $this->Mnhapdonhang->get("tbl_trangthaigiaohang"),
				'sanpham' => $this->Mnhapdonhang->get_tenSP(),
			)
		);
		$this->load->view('layout/content',$temp);
	}

	public function themdonhang(){
		$session = $this->session->userdata("user");
		$data = $this->input->post('data');
		$donhan = array(
			'thoigian_mua' 		=> $data['thoigian_nhap'],
			'nguoilap_donhang' 	=> $session['ma_taikhoan'],
			'ma_nhacungcap' 		=> $data['ma_nhacungcap'],
		);
		$id = $this->Mdonhang->add_tbl_donhanghang($donhanghang);
		for($i=0; $i< count($data['ma_sanpham']); $i++){
			$chitiet_donhanghang = array(
				'ma_sanpham' 	=> $data['ma_sanpham'][$i],
				'soluong_nhap' 	=> $data['soluong_nhap'][$i],
				'dongia_nhap' 	=> $data['dongia_nhap'][$i],
				'ma_donhang' 	=> $id,
			);
			$this->Mdonhang->insert("tbl_chitiet_donhanghang", $chitiet_donhanghang);
		}
		setMessages("success", "Thêm thành công", "Thông báo");
		return redirect("donhang");
	}
}