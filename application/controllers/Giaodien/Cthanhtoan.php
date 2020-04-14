<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Cthanhtoan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Giaodien/Mthanhtoan');
		$this->load->model('Giaodien/Mtrangchu');
		date_default_timezone_set('Asia/Bangkok');
	}

	public function index()
	{
		$session = $this->session->userdata('user');
		$khachhang = $this->Mthanhtoan->get_where_in("tbl_thanhvien", "ma_thanhvien",array("ma_thanhvien" => $session['ma_thanhvien']));
		
		$dulieu = $this->get_Details();

	 	$sanpham = $dulieu['details_prduct'];
	 	$thongke = $dulieu['thongke']['tongDG'];
		$masp = "";
		if($masp = $this->input->get('masp')){
			$masp = explode("_", $masp)[2];
			$check = $this->Mthanhtoan->check_sp($masp);
	 		if($check == 0){
	 			return redirect(base_url("trangsanpham"));
	 		}
			$sanpham = $this->Mthanhtoan->getSP($masp);
			$thongke = number_format($sanpham[0]['soluong']*$sanpham[0]['dongia_sanpham'], 0, ",", ",");
		}
		$action = $this->input->post('action');
		switch ($action) {
			case 'add_address':
				$this->add_address($session);
				break;
			case 'load_address':
				$this->load_address($session);
				break;
			case 'capnhat_address':
				$this->update_address($session);
				break;
			case 'delete_address':
				$this->delete_address();
				break;	
			case 'xulydonhang':
				$this->xulydonhang($session);
				break;	
			default:
				# code...
				break;
		}

		$temp = array(
			'template' => 'Giaodien/Vthanhtoan',
			'data' => array(
				'details_prduct'	=> $sanpham,
				'thongke'			=> $thongke,
				'khachhang'			=> $khachhang,
				'diachi' 			=> $this->Mthanhtoan->get_where("tbl_diachi", "ma_thanhvien", $session['ma_thanhvien']),
				'masp'				=> $masp,
			),
		);
		$this->load->view('layout/main_content', $temp);

	}

	function xulydonhang($session){
		$masp = $this->input->post("masp");
		$ghichu = $this->input->post('ghichu');
		if(!empty($masp)){
			$check = $this->Mthanhtoan->check_sp1($masp, $session['ma_thanhvien']);
			if(!empty($check)){
				
				/*Update bảng tbl_cart và bảng phiếu nhập hàng 
				&&Tạo 1 hóa đơn và update trạng thái đơn của khách hàng đang xử lý*/
				$hoadon = array(
					'ma_hoadonmua'			=> "HD".preg_replace("/[^a-zA-Z0-9]+/", "", $session['ma_thanhvien']).time(),
					'ngaylap' 				=> date("d/m/Y H:i:s"),
					'chiphi_giao'   		=> NULL,
					'chiphi_lapdat'   		=> NULL,
					'ghichu'   				=> $ghichu,
					'ma_hinhthucthanhtoan'  => 1,
					'nguoimuahang'   		=> $session['ma_thanhvien'],
					'nguoilap'   			=> NULL,
					'ma_trangthai_giaohang' => 1, // trạng thái đang xử lý đơn hàng
				);
				$this->Mthanhtoan->insert("tbl_hoadonmua", $hoadon);
				$ct_hoadon = array(
					"ma_sanpham" 	=> $check['ma_sanpham'], 
					"soluong_mua" 	=> $check['soluong'], 
					"giaban" 		=> $check['dongia_sanpham'], 
					"tongtien" 		=> $check['dongia_sanpham']*$check['soluong'], 
					"ma_hoadonmua" 	=> $hoadon['ma_hoadonmua'], 
				);
				$sl['soluong'] = $check['sl'] - $check['soluong'];
				$row = $this->Mthanhtoan->insert("tbl_ct_hoadon", $ct_hoadon);
				$this->Mthanhtoan->update("tbl_sanpham", "ma_sanpham", $check['ma_sanpham'],$sl);
				$this->Mthanhtoan->delete_cart($session['ma_thanhvien'], $masp); // xóa sản phẩn trong giỏ hàng
				if($row > 0){
					echo "thanhcong";
				}else{
					echo "thatbai";
				}

			}else{
				echo "thatbai";
			}
		}else{

			$sanpham = $this->Mthanhtoan->getSanPham($session['ma_thanhvien']);
			$hoadon = array(
				'ma_hoadonmua'			=> "HD".preg_replace("/[^a-zA-Z0-9]+/", "", $session['ma_thanhvien']).time(),
				'ngaylap' 				=> date("d/m/Y H:i:s"),
				'chiphi_giao'   		=> NULL,
				'chiphi_lapdat'   		=> NULL,
				'ghichu'   				=> $ghichu,
				'ma_hinhthucthanhtoan'  => 1,
				'nguoimuahang'   		=> $session['ma_thanhvien'],
				'nguoilap'   			=> NULL,
				'ma_trangthai_giaohang' => 1, // trạng thái đang xử lý đơn hàng
			);
			$this->Mthanhtoan->insert("tbl_hoadonmua", $hoadon);
			foreach ($sanpham as $key => $value) {
				$ct_hoadon = array(
					"ma_sanpham" 	=> $value['ma_sanpham'], 
					"soluong_mua" 	=> $value['soluong'], 
					"giaban" 		=> $value['dongia_sanpham'], 
					"tongtien" 		=> $value['dongia_sanpham']*$value['soluong'], 
					"ma_hoadonmua" 	=> $hoadon['ma_hoadonmua'], 
				);
				$sl['soluong'] = $value['sl'] - $value['soluong'];
				$row = $this->Mthanhtoan->insert("tbl_ct_hoadon", $ct_hoadon);
				$this->Mthanhtoan->update("tbl_sanpham", "ma_sanpham", $value['ma_sanpham'],$sl);
			}
			$this->Mthanhtoan->delete_cart($session['ma_thanhvien'], $masp); // xóa sản phẩn trong giỏ hàng
			if($row > 0){
				echo "thanhcong";
			}else{
				echo "thatbai";
			}


		}
		exit();
		
	}

	function load_address($session){
		$data  = $this->Mthanhtoan->get_where("tbl_diachi", "ma_thanhvien", $session['ma_thanhvien']);
		echo json_encode($data);
		exit();
	}

	function delete_address(){
		$madc = $this->input->post('madc');
		$row = $this->Mthanhtoan->delete("tbl_diachi","ma_diachi", $madc);
		if($row > 0){
			echo "thanhcong";
		}else{
			echo "thatbai";
		}
		exit();
	}


	function update_address($session){
		$diachi = $this->input->post('diachi');
		$madc = $this->input->post('madc');
		$data = array(
			'ma_thanhvien' 	=> $session['ma_thanhvien'],
			'ten_diachi' 	=> $diachi,
		);
		$row = $this->Mthanhtoan->update("tbl_diachi","ma_diachi", $madc, $data);
		if($row > 0){
			echo "thanhcong";
		}else{
			echo "thatbai";
		}
		exit();
	}


	function add_address($session){
		$diachi = $this->input->post('diachi');
		$data = array(
			'ma_thanhvien' 	=> $session['ma_thanhvien'],
			'ten_diachi' 	=> $diachi,
		);
		$row = $this->Mthanhtoan->insert("tbl_diachi", $data);
		if($row > 0){
			echo "thanhcong";
		}else{
			echo "thatbai";
		}
		exit();
	}


	function get_Details(){
		$session = $this->session->userdata('user');
		$details_prduct = $this->Mthanhtoan->get_detail_product($session['ma_thanhvien']);
		$tongsoluong = count($details_prduct);
		$tongDG  = 0;

		foreach ($details_prduct as $key => $value) {
			$tongDG += $value['dongia_sanpham']*$value['soluong'];
		}
		$tongDG = number_format($tongDG, 0, ",", ",");
		$thongke = array(
			'tongSL'	=> $tongsoluong,
			'tongDG'	=> $tongDG,
		);
		$data = array(
			'details_prduct'	=> $details_prduct,
			'thongke'			=> $thongke,
		);
		return $data;
	}
}


