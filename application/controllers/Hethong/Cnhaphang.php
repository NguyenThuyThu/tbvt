<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Controller
*
**/
class Cnhaphang extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hethong/Mphieunhap');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		// pr($this->Mphieunhap->getCTphieuNhap());
		if($this->input->post('themphieunhap')){
			$this->themphieunhap();
		}

		if($this->input->post('action') == "xoaphieunhap"){
			$maPN = $this->input->post('maPN');
			$row = $this->Mphieunhap->delete("tbl_ct_phieunhap", "ma_phieunhap", $maPN);
			$row = $this->Mphieunhap->delete("tbl_phieunhap", "ma_phieunhap", $maPN);
			if($row > 0){
				echo "thanhcong";
			}else{
				echo "thatbai";
			}
			exit();
		}

		if($this->input->post('capnhatpn')) {
			$this->capnhatpn();
		}
		
		$phieunhap = $this->Mphieunhap->getPhieuNhap();
		foreach ($phieunhap as $key => $value) {
			$phieunhap[$key]['ctphieunhap'] = json_encode($this->Mphieunhap->getCTphieuNhap($value['ma_phieunhap']));
		}
		$sanpham =  $this->Mphieunhap->get_tenSP();
		// pr($phieunhap);

		$temp = array(
			'template' => 'Hethong/Vnhaphang',
			'data' => array(
				'nhacc' => $this->Mphieunhap->get("tbl_nhacungcap"),
				'phieunhap' => $phieunhap,
				'sanpham' => $sanpham,
			)
		);
		$this->load->view('layout/content',$temp);
	}

	public function themphieunhap(){
		$session = $this->session->userdata("user");
		$data = $this->input->post('data');
		// pr($data);
		$ma_phieunhap= 'PN'.rand(1000,99999).time();
		$phieunhaphang = array(
			'ma_phieunhap' 		=> $ma_phieunhap,
			'thoigian_nhap' 	=> $data['thoigian_nhap'],
			'ghichu'	 		=> "",
			'nguoilap' 			=> $session['ma_taikhoan'],
			'ma_nhacungcap' 	=> $data['ma_nhacungcap'],
		);
		$id = $this->Mphieunhap->add_tbl_phieunhap($phieunhaphang);
		$dongia_ban = $this->input->post("dongiaban");
		for($i=0; $i< count($data['ma_sanpham']); $i++){
			$chitiet_phieunhaphang = array(
				'ma_sanpham' 	=> $data['ma_sanpham'][$i],
				'soluong_nhap' 	=> $data['soluong_nhap'][$i],
				'dongia_nhap' 	=> $data['dongia_nhap'][$i],
				'tongtien'  	=> $data['soluong_nhap'][$i] * $data['dongia_nhap'][$i],
				'ma_phieunhap' 	=> $phieunhaphang['ma_phieunhap'],
			);
			$dongia['dongia_sanpham'] = $dongia_ban[$i];
		// pr($chitiet_phieunhaphang);
			if($dongia['dongia_sanpham'] != ""){
				$this->Mphieunhap->update("tbl_sanpham","ma_sanpham", $chitiet_phieunhaphang['ma_sanpham'], $dongia);
			}
			$sp = $this->Mphieunhap->get_where_row("tbl_sanpham", "ma_sanpham", $chitiet_phieunhaphang['ma_sanpham']);
			$sl['soluong'] = $data['soluong_nhap'][$i] + $sp['soluong'];
			$this->Mphieunhap->update("tbl_sanpham", "ma_sanpham", $chitiet_phieunhaphang['ma_sanpham'], $sl);
			$this->Mphieunhap->insert("tbl_ct_phieunhap", $chitiet_phieunhaphang);
		}
		setMessages("success", "Thêm thành công", "Thông báo");
		return redirect("nhaphang");
	}

	public function capnhatpn() {
		$ma 	  = $this->input->post('capnhatpn');
		$data 	  = $this->input->post('data');
        $dongia_ban = $this->input->post("dongiaban");
		for($i=0; $i< count($data['ma_sanpham']); $i++){
			$chitiet_phieunhaphang = array(
				'ma_sanpham' 	=> $data['ma_sanpham'][$i],
				'soluong_nhap' 	=> $data['soluong_nhap'][$i],
				'dongia_nhap' 	=> $data['dongia_nhap'][$i],
				'tongtien'  	=> $data['soluong_nhap'][$i] * $data['dongia_nhap'][$i],
				'ma_phieunhap' 	=> $ma,
			);
			$this->Mphieunhap->update_ctPhieuNhap($ma, $chitiet_phieunhaphang['ma_sanpham'], $chitiet_phieunhaphang);
			//lây số lượng hiện tại kiểm tra sau khi sửa là tăng số lượng hay giảm số lượng để update và bảng sản phẩm
			$check_soluong_kho = $this->Mphieunhap->sumSL($chitiet_phieunhaphang['ma_sanpham'])['soluong_nhap'];
			
			$sanpham = array(
				'dongia_sanpham' => $dongia_ban[$i],
				'soluong'		 => $check_soluong_kho
			);
			
			if($sanpham['dongia_sanpham'] != ""){
				$this->Mphieunhap->update("tbl_sanpham","ma_sanpham", $chitiet_phieunhaphang['ma_sanpham'], $sanpham);
			}
		}
		setMessages("success", "Sửa thành công", "Thông báo");
		return redirect("nhaphang");
	}
}