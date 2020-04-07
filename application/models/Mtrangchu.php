<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtrangchu extends MY_Model {

	public function __construct()
	{
		parent::__construct();

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

		$this->db->select('*');

		$this->db->from('tbl_sanpham');

		$this->db->join('tbl_loaisanpham', 'tbl_loaisanpham.ma_loaisanpham = tbl_sanpham.ma_loaisanpham', 'inner');

		$this->db->join('tbl_danhmuc_sanpham', 'tbl_danhmuc_sanpham.ma_dmsanpham = tbl_loaisanpham.ma_dmsanpham', 'inner');

		$this->db->join('tbl_donvitinh_sanpham', 'tbl_donvitinh_sanpham.ma_donvitinh = tbl_sanpham.ma_donvitinh', 'inner');

		$this->db->join('tbl_nhacungcap', 'tbl_nhacungcap.ma_nhacungcap = tbl_sanpham.ma_nhacungcap', 'inner');

		$this->db->join('tbl_anhsanpham', 'tbl_anhsanpham.ma_sanpham = tbl_sanpham.ma_sanpham', 'inner');

		$this->db->join('tbl_taikhoan', 'tbl_taikhoan.ma_taikhoan = tbl_sanpham.nguoidang_sp', 'inner');

		$query = $this->db->get();
		// echo $this->db->last_query();
		return $query->result_array();	

	}

	/*Lấy dữ liêu đầy đủ của một sản phẩm*/
	public function getdulieu($ma_sanpham){

		$this->db->select('*');
		$this->db->where('ma_sanpham',$ma_sanpham);
		$this->db->where('trangthai_dang_sanpham', 1);
		$this->db->where('trangthai_hot_sanpham', 1);
		return $this->db->get('tbl_sanpham')->row_array();
	}
	public function get_SumCart($matv){
		$this->db->select('count("ma_sanpham") as tongCart');
		$this->db->where("ma_thanhvien", $matv);
		return $this->db->get('tbl_cart')->row_array();
	}
}

