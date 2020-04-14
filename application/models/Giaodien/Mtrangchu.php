<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtrangchu extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->proTable = 'tbl_sanpham';
		$this->cusTable = 'tbl_thanhvien';
		$this->ordTable = 'tbl_hoadonmua';
		$this->ordItemTable = 'tbl_ct_hoadon';

	}

	function get_dmsanpham(){

		return $this->db->get('tbl_danhmuc_sanpham')->result_array(); 

	}

	function get_sanphamslide($limit, $offset){

		$this->db->select('*, tbl_loaisanpham.ten_loaisanpham');

		$this->db->from('tbl_sanpham');

		$this->db->join('tbl_loaisanpham', 'tbl_loaisanpham.ma_loaisanpham = tbl_sanpham.ma_loaisanpham', 'inner');

		$this->db->join('tbl_anhsanpham', 'tbl_anhsanpham.ma_sanpham = tbl_sanpham.ma_sanpham', 'inner');

		$this->db->order_by('ngaydang desc');

		$this->db->limit($limit,$offset);

		$query = $this->db->get();

		return $query->result_array();	

	}


	function get_sanpham(){

		$this->db->select('tbl_anhsanpham.linkanh_sanpham, tbl_sanpham.*');

		$this->db->from('tbl_sanpham');
		$this->db->join('tbl_nhacungcap', 'tbl_nhacungcap.ma_nhacungcap = tbl_sanpham.ma_nhacungcap', 'inner');
		$this->db->join('tbl_anhsanpham', 'tbl_anhsanpham.ma_sanpham = tbl_sanpham.ma_sanpham', 'inner');
		$query = $this->db->get();
		return $query->result_array();	
	}

	/*Lấy dữ liêu đầy đủ của một sản phẩm*/
	public function getdulieu($ma_sanpham){

		$this->db->select('*');
		$this->db->where('tbl_sanpham.ma_sanpham',$ma_sanpham);
		$this->db->where('trangthai_dang_sanpham', 1);
		$this->db->where('trangthai_hot_sanpham', 1);
		$this->db->join('tbl_anhsanpham', 'tbl_anhsanpham.ma_sanpham = tbl_sanpham.ma_sanpham', 'inner');
		$this->db->join('tbl_donvitinh_sanpham', 'tbl_donvitinh_sanpham.ma_donvitinh = tbl_sanpham.ma_donvitinh', 'inner');
		return $this->db->get('tbl_sanpham')->row_array();
	}

	public function get_SumCart($matv){
		// $this->db->select("tbl_ct_hoadon.ma_sanpham");
		// $this->db->where("tbl_hoadonmua.nguoimuahang", $matv);
		// $this->db->join("tbl_ct_hoadon", "tbl_hoadonmua.ma_hoadonmua = tbl_ct_hoadon.ma_hoadonmua");		
		// $rl = $this->db->get("tbl_hoadonmua")->result_array();
		// for ($i = 0; $i< count($rl); $i++) {
		// 	$ma_sp[] = $rl[$i]['ma_sanpham'];
		// }
		$this->db->select('count("ma_sanpham") as tongCart');
		$this->db->where("ma_thanhvien", $matv);
		// $this->db->where_not_in("ma_sanpham", $ma_sp);
		$row = $this->db->get('tbl_cart')->row_array();
		return $row;
	}


	public function getSPLQ($masp){
		$this->db->select('tbl_sanpham.ten_sanpham, tbl_sanpham.dongia_sanpham, tbl_sanpham.thoigianbaohanh_sanpham, tbl_sanpham.xuatxu_sanpham, tbl_anhsanpham.linkanh_sanpham, tbl_sanpham.ma_sanpham');
		$this->db->where_not_in('tbl_sanpham.ma_sanpham',$masp);
		$this->db->join("tbl_anhsanpham", "tbl_sanpham.ma_sanpham = tbl_anhsanpham.ma_sanpham");
		$this->db->limit(3);
		$this->db->order_by('tbl_sanpham.ma_sanpham', 'RANDOM');
		return $this->db->get("tbl_sanpham")->result_array();
	}

	public function search($timkiem){
		$this->db->from("tbl_sanpham as sp");
		$this->db->join("tbl_anhsanpham as anh", "anh.ma_sanpham = sp.ma_sanpham");
		$this->db->like("sp.ten_sanpham", $timkiem);
		$this->db->order_by("sp.ten_sanpham","ASC");
		return $this->db->get()->result_array();
	}
	
}

